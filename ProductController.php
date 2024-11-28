<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // Menampilkan form untuk membuat produk
    public function create()
    {
        return view('create'); // Menampilkan form untuk membuat produk
    }

    // Menyimpan produk
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi file gambar
        ]);

        // Proses upload gambar jika ada
        if ($request->hasFile('gambar')) {
            // Ambil file gambar
            $image = $request->file('gambar');

            // Tentukan nama file dan simpan gambar ke storage
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('public', $imageName);
            // Simpan data produk ke database
            Product::create([
                'nama_produk' => $request->nama_produk,
                'harga' => $request->harga,
                'gambar' => $path,  // Simpan nama file gambar ke database
            ]);
        } else {
            // Jika tidak ada gambar, simpan data tanpa gambar
            Product::create([
                'nama_produk' => $request->nama_produk,
                'harga' => $request->harga,
                'gambar' => null,  // Tidak ada gambar
            ]);
        }

        return redirect()->route('products')->with('success', 'Product created successfully!');
    }

    // Menampilkan daftar produk
    public function index()
    {
        $products = Product::all(); // Ambil semua produk dari database
        return view('products', compact('products')); // Kirim data produk ke view
    }


    
    // public function index()
    // {
    //     // Menampilkan 9 produk per halaman
    //     $products = Product::paginate(9);
    //     return view('your_view_name', compact('products'));
    // }
    
    // Menampilkan halaman produk
    public function products()
    {
        $products = Product::all();
        return view('products', compact('products')); // Kirim data produk ke view
        
    }

    // ini perubahan edit hapus
    
// public function edit($id)
// {
//     $product = Product::findOrFail($id);
//     return view('edit', compact('products'));
// }
// //update produk

public function edit($id)
{
    $product = Product::findOrFail($id);
    return view('edit', compact('product'));
}


// {   
//     // Mengambil ID produk dari session
//     $product_id = session('product_id');
//     // Mencari produk berdasarkan ID yang disimpan di session
//     $product = Product::findOrFail($product_id);
//     return view('edit', compact('products'));
// }
public function update(Request $request, $id)
{
    $request->validate([
        'nama_produk' => 'required',
        'harga' => 'required|numeric',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $product = Product::findOrFail($id);
    $product->nama_produk = $request->nama_produk;
    $product->harga = $request->harga;

    if ($request->hasFile('gambar')) {
        // Hapus gambar lama jika ada
        if ($product->gambar) {
            Storage::delete('public/' . $product->gambar); // Pastikan prefix 'public/' sesuai
        }
    
        // Upload gambar baru
        $path = $request->file('gambar')->store('storage/'); // Gunakan hanya 'public'
        $product->gambar = basename($path); 
        $product->gambar = $path; // Simpan path lengkap
// Simpan nama file saja
    }
    
    $product->save();

    return redirect()->route('products')->with('success', 'Product updated successfully');
}

public function destroy($id)
{
    $product = Product::findOrFail($id);
    $product->delete();

    return redirect()->route('products')->with('success', 'Product deleted successfully');
}

public function setProductSession(Request $request)
{
    // Menyimpan ID produk ke session
    session(['product_id' => $request->product_id]);

    // Setelah menyimpan ID produk, arahkan ke halaman edit
    return redirect()->route('edit');
}

public function indexForUsers()
{
    $products = Product::all(); // Ambil semua produk
    return view('user-products', compact('products'));
}

public function show($id)
{
    $product = Product::findOrFail($id);
    return view('single-product', compact('product'));
}

public function home()
{
    $products = Product::all(); // Mengambil semua data produk
    // dd($products);
    return view('index', compact('products')); // Kirim data ke view
}

// public function showProducts()
// {
//     $products = Product::all(); // or whatever method you use to retrieve products
//     return view('index', compact('products')); // Pass the $products to the view
// }

}