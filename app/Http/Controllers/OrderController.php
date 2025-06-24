<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class OrderController extends Controller
{
    use AuthorizesRequests;

    public function __construct()
    {
     // pastikan hanya di sini
        $this->authorizeResource(Order::class, 'order');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $orders = $request->user()->orders()->latest()->get();
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'website_name' => 'required|string|max:255',
            'website_type' => 'required|string|max:255',
            'desired_features' => 'required|string',
            'design_reference' => 'nullable|string',
            'budget' => 'required|numeric|min:0',
            'deadline' => 'required|date|after:today',
            'additional_file' => 'nullable|file|max:10240', // Max 10MB
        ]);

        if ($request->hasFile('additional_file')) {
            $validatedData['additional_file'] = $request->file('additional_file')->store('additional_files', 'public');
        }

        $validatedData['whatsapp_link'] = 'https://wa.me/6282114028613'; // Replace with your WhatsApp number

        $order = $request->user()->orders()->create($validatedData);

        return redirect()->route('orders.show', $order)
            ->with('success', 'Pesanan berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        return view('orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $validated = $request->validate([
            'website_name' => 'required|string|max:255',
            'website_type' => 'required|string|max:255',
            'desired_features' => 'required|string',
            'design_reference' => 'nullable|string',
            'budget' => 'required|numeric|min:0',
            'deadline' => 'required|date|after:today',
            'additional_file' => 'nullable|file|max:10240', // Max 10MB
        ]);

        if ($request->hasFile('additional_file')) {
            // Delete old file if it exists
            if ($order->additional_file) {
                Storage::disk('public')->delete($order->additional_file);
            }
            $validated['additional_file'] = $request->file('additional_file')->store('additional_files', 'public');
        }

        $order->update($validated);

        return redirect()->route('orders.show', $order)
            ->with('success', 'Pesanan berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        if ($order->additional_file) {
            Storage::disk('public')->delete($order->additional_file);
        }

        $order->delete();

        return redirect()->route('orders.index')
            ->with('success', 'Pesanan berhasil dihapus!');
    }
}

