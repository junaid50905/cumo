<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if (view()->exists($request->path())) {
            return view($request->path());
        }
        return abort(404);
    }

    public function root()
    {
        return view('index');
    }

    public function journal()
    {
        return view('journal');
    }

    public function approvedJournal()
    {
        return view('approved_journals_list');
    }

    public function studentIncome()
    {
        return view("student_income");
    }

    public function studentReceivable()
    {
        return view("student_receivable");
    }
    public function receivedPayment()
    {
        return view("received_payment");
    }
    public function saleVoucher()
    {
        return view("sale_voucher");
    }
    public function requisition()
    {
        return view("requisition");
    }
    public function purchaseOrder()
    {
        return view("purchase_order");
    }
    public function purchaseReturn()
    {
        return view("purchase_return");
    }
    public function supplierPayment()
    {
        return view("supplier_payment");
    }
    public function directPayment()
    {
        return view("direct_payment");
    }
    // Inventory management
    public function stockAssign()
    {
        return view("stock_assign");
    }
    public function stockOut()
    {
        return view("stock_out");
    }
    public function stockHandReport()
    {
        return view("stock_hand_report");
    }
    public function locationWiseProductReport()
    {
        return view("location_wise_product_report");
    }
    public function stockReorderReport()
    {
        return view("stock_reorder_report");
    }
    public function stockAnalysisReport()
    {
        return view("product_analysis_report");
    }
    // Stock Management
    public function stockRecive()
    {
        return view("stock_recive");
    }
    public function finishedGoods()
    {
        return view("finished_goods");
    }
    public function materialCallects()
    {
        return view("material_callects");
    }
    public function stockTransfer()
    {
        return view("stock_transfer");
    }
    public function stockCount()
    {
        return view("stock_count");
    }
    public function myStudents()
    {
        return view("my_students");
    }

    /*Language Translation*/
    public function lang($locale)
    {
        if ($locale) {
            App::setLocale($locale);
            Session::put('lang', $locale);
            Session::save();
            return redirect()->back()->with('locale', $locale);
        } else {
            return redirect()->back();
        }
    }

    public function updateProfile(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email'],
            'avatar' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
        ]);

        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');

        if ($request->file('avatar')) {
            $avatar = $request->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatarPath = public_path('/images/');
            $avatar->move($avatarPath, $avatarName);
            $user->avatar = '/images/' . $avatarName;
        }

        $user->update();
        if ($user) {
            Session::flash('message', 'User Details Updated successfully!');
            Session::flash('alert-class', 'alert-success');
            return response()->json([
                'isSuccess' => true,
                'Message' => "User Details Updated successfully!"
            ], 200); // Status code here
        } else {
            Session::flash('message', 'Something went wrong!');
            Session::flash('alert-class', 'alert-danger');
            return response()->json([
                'isSuccess' => true,
                'Message' => "Something went wrong!"
            ], 200); // Status code here
        }
    }

    public function updatePassword(Request $request, $id)
    {
        $request->validate([
            'current_password' => ['required', 'string'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            return response()->json([
                'isSuccess' => false,
                'Message' => "Your Current password does not matches with the password you provided. Please try again."
            ], 200); // Status code
        } else {
            $user = User::find($id);
            $user->password = Hash::make($request->get('password'));
            $user->update();
            if ($user) {
                Session::flash('message', 'Password updated successfully!');
                Session::flash('alert-class', 'alert-success');
                return response()->json([
                    'isSuccess' => true,
                    'Message' => "Password updated successfully!"
                ], 200); // Status code here
            } else {
                Session::flash('message', 'Something went wrong!');
                Session::flash('alert-class', 'alert-danger');
                return response()->json([
                    'isSuccess' => true,
                    'Message' => "Something went wrong!"
                ], 200); // Status code here
            }
        }
    }
}
