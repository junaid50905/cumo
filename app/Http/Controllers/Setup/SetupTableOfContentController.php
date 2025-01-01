<?php

namespace App\Http\Controllers\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Repositories\Setup\SetupTableOfContentRepository;

class SetupTableOfContentController extends Controller
{
    private SetupTableOfContentRepository $tableOfContentRepository;

    public function __construct(SetupTableOfContentRepository $tableOfContentRepository) {
        $this->tableOfContentRepository = $tableOfContentRepository;
    }

    public function index(){
        $tableContents = $this->tableOfContentRepository->getHierarchicalData();
        // dd($tableContents);
        
        return view('setup.table-of-content.show_table_of_content', compact('tableContents'));
    }


    public function create(){
        return view('setup.table-of-content.add_table_of_content');
    }

    public function store(Request $request){
        
    } 
    
    public function show(){

    }

    public function search(){

    }

    public function edit($id){
        // dd($id);
        return view('setup.table-of-content.edit_table_of_content', ['id' => $id]);
    }

    public function update(){

    }

    public function disabledItem($id){
        $tableContents = $this->tableOfContentRepository->disabledSelectedItem($id);
        // dd($tableContents);
        if($tableContents){
            return redirect()->route('setup-table-of-content.index')->with('success', 'Item disabled successfully.');
        }
        return redirect()->route('setup-table-of-content.index')->with('danger', 'Something went to be wrong to disabled.');
    }
}
