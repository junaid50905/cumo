p\Http\Controllers;

use App\Models\LeaveApplication;
use App\Http\Requests\StoreLeaveApplicationRequest;
use App\Http\Requests\UpdateLeaveApplicationRequest;

class LeaveApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLeaveApplicationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLeaveApplicationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LeaveApplication  $leaveApplication
     * @return \Illuminate\Http\Response
     */
    public function show(LeaveApplication $leaveApplication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LeaveApplication  $leaveApplication
     * @return \Illuminate\Http\Response
     */
    public function edit(LeaveApplication $leaveApplication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLeaveApplicationRequest  $request
     * @param  \App\Models\LeaveApplication  $leaveApplication
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLeaveApplicationRequest $request, LeaveApplication $leaveApplication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LeaveApplication  $leaveApplication
     * @return \Illuminate\Http\Response
     */
    public function destroy(LeaveApplication $leaveApplication)
    {
        //
    }
}
