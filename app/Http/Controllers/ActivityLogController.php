<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityLogController extends Controller
{
    public function logActivity(Request $request, $activity)
    {
        $user = Auth::user();
        $ipAddress = $request->ip();
        ActivityLog::create([
            'user_id' => $user->id,
            'name' => $user->name,
            'activity' => $activity,
            'user_ip' => $ipAddress,
            'date_time' => now(),
        ]);

        return response()->json(['message' => 'Activity logged successfully']);
    }
}
