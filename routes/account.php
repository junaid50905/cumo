<?php
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\StockHandReport;
use App\Http\Livewire\StockCountReport;
use App\Http\Controllers\StockController;
use App\Http\Livewire\StockProductReport;
use App\Http\Livewire\StockReorderReport;
use App\Http\Controllers\ChequeController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\StockOutController;
use App\Http\Controllers\BankAccountController;
use App\Http\Controllers\PreAdmissionPaymentController;
use App\Http\Controllers\RequisitionController;
use App\Http\Controllers\SaleVoucherController;
use App\Http\Controllers\StockAssignController;
use App\Http\Controllers\StockReportController;
use App\Http\Controllers\FinishedGoodController;
use App\Http\Controllers\StockReceiveController;
use App\Http\Controllers\DirectPaymentController;
use App\Http\Controllers\StockTransferController;
use App\Http\Controllers\StudentIncomeController;
use App\Http\Controllers\PurchaseReturnController;
use App\Http\Controllers\SupplierPaymentController;
use App\Http\Controllers\MaterialCollectionController;

Route::group(['prefix' => 'account', 'middleware' => ['auth']], function () {
    Route::resources([
        'journal' => JournalController::class,

        'pre-admission-income' => PreAdmissionPaymentController::class,
        'student-income' => StudentIncomeController::class,
        'sale-voucher' => SaleVoucherController::class,
        'donation-and-other' => DonationController::class,

        'requisition' => RequisitionController::class,
        'supplier-payment' => SupplierPaymentController::class,
        'direct-payment' => DirectPaymentController::class,

        'stock-receive' => StockReceiveController::class,
        'finished-goods' => FinishedGoodController::class,
        'material-collect' => MaterialCollectionController::class,
        'stock-transfer' => StockTransferController::class,

        'stock-assign' => StockAssignController::class,
        'stock-out' => StockOutController::class,

        'cheque' => ChequeController::class,
        'bank-account' => BankAccountController::class,

        'purchase-return' => PurchaseReturnController::class,

    ]);

    // Pre-Admission Payment Start
    Route::match(['get', 'post'], 'pre-admission-income-search', [PreAdmissionPaymentController::class, 'search'])->name('pre-admission-income-search.search');
    Route::get('pre-admission-income-invoice', [PreAdmissionPaymentController::class, 'preAdmissionIncomeInvoice'])->name('pre-admission-income-invoice.invoice');
    // Pre-Admission Payment End

    Route::get('purchase-order/requisition/{requisition?}', [PurchaseController::class, 'create'])->name('purchase-order.create');
    Route::get('purchase-order/{requisition}', [PurchaseController::class, 'show'])->name('purchase-order.show');
    Route::post('purchase-order/requisition/{requisition}/store', [PurchaseController::class, 'store'])->name('purchase-order.store');
    Route::get('purchase-order/{purchase_order}/requisition/{requisition}/edit', [PurchaseController::class, 'edit'])->name('purchase-order.edit');
    Route::put('purchase-order/{purchase_order}/requisition/{requisition}/update', [PurchaseController::class, 'update'])->name('purchase-order.update');
    Route::delete('purchase-order/{purchase}/delete', [PurchaseController::class, 'destroy'])->name('purchase-order.delete');
    Route::get('purchase-order-return/{purchase}', [PurchaseController::class, 'purchaseReturn'])->name('purchase-order.return');
    Route::get('purchase-order-return', [PurchaseController::class, 'purchaseReturnShow'])->name('purchase-order.return.show');

    // direct Payment route Start
    Route::get('account/direct-payment/cash-payment-list', [DirectPaymentController::class, 'cashPaymentList'])->name('cash-payment.list');
    Route::get('cash-payment-list', [PaymentController::class, 'casePaymentList'])->name('cash-payment-list');
    Route::get('advance-payment-list', [PaymentController::class, 'advancePaymentList'])->name('advance.payment.list');
    Route::get('bank-to-bank-list', [PaymentController::class, 'bankToBankList'])->name('bank.to.bank.list');
    // direct Payment route End


    // Accounting Reporting
    Route::get('stock-count/report', StockCountReport::class)->name('stockCount.report');
    Route::get('stock-hand-report', StockHandReport::class)->name('stock-hand-report');
    Route::get('stock-product-report', StockProductReport::class)->name('stock-product-report');

    // Route::get('stock-hand-report', [StockController::class, 'stockHandReport'])->name('stock-hand-report');
    // Route::get('stock-product-report', [StockController::class, 'stockProductReport'])->name('stock-product-report');
    Route::get('stock-reorder-report', StockReorderReport::class)->name('stock-reorder-report');
    Route::get('product-analysis-report', [StockController::class, 'stockProductAnalysisReport'])->name('product-analysis-report');
    Route::get('stock_receive_report', [StockController::class, 'stockReceiveReport'])->name('stock_receive_report');

    Route::get('reporting.trail-balance.create', [PaymentController::class, 'trailBalance'])->name('accounting.reporting.trail-balance.create');
    Route::get('reporting.p&l-statement.create', [PaymentController::class, 'plStatement'])->name('accounting.reporting.p&l-statement.create');
    Route::get('reporting.balance-sheet.create', [PaymentController::class, 'balanceSheet'])->name('accounting.reporting.balance-sheet.create');
    Route::get('print-layout.print', [PaymentController::class, 'print'])->name('print-layout.print');
});
