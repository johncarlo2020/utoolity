<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TriggerController extends Controller
{
    public function receiveTrigger(Request $request)
    {
        // Handle the trigger logic here
        // You can access the data sent by the Arduino in the $request object
        // For example, you can get the button status like this:
        $buttonStatus = $request->input('button_status');

        // Process the trigger data as needed
        // You can perform actions such as updating a database, sending notifications, etc.

        // Send a response back to the Arduino if needed
        return response()->json(['status' => 'success', 'message' => 'Trigger received']);
    }
}
