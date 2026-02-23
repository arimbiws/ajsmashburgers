<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Message::query();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where('name', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%")
                ->orWhere('subject', 'like', "%{$search}%");
        }

        switch ($request->sort) {
            case 'terlama':
                $query->oldest();
                break;
            case 'belum_dibaca':
                $query->orderBy('is_read', 'asc')->latest();
                break;
            case 'sudah_dibaca':
                $query->orderBy('is_read', 'desc')->latest();
                break;
            default:
                $query->latest();
                break;
        }

        $messages = $query->paginate(10)->withQueryString();
        return view('admin.messages.index', compact('messages'));
    }

    public function show(Message $message)
    {
        if (!$message->is_read) {
            $message->update(['is_read' => true]);
        }

        return view('admin.messages.show', compact('message'));
    }

    public function destroy(Message $message)
    {
        $message->delete();
        return redirect()->route('admin.messages.index')->with('success', 'Pesan berhasil dihapus!');
    }
}
