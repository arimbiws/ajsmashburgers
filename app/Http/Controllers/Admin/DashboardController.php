<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Message;
use App\Models\Outlet;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalMenus = Menu::count();
        $totalOutlets = Outlet::count();
        $unreadMessages = Message::where('is_read', false)->count();
        $recentMessages = Message::latest()->take(5)->get();

        return view('admin.dashboard', compact('totalMenus', 'totalOutlets', 'unreadMessages', 'recentMessages'));
    }
}
