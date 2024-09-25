<?php

namespace App\Console\Commands\OnlinePajak;

use Carbon\Carbon;
use Illuminate\Console\Command;
use App\Services\OnlinePajakService;

class CreateTaxInvoice extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-tax-invoice {invoiceNumber}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create tax invoice';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $op = new OnlinePajakService();
        $invoiceNumber = $this->argument('invoiceNumber');
        $invoiceDate = Carbon::now();
        $invoiceDueDate = Carbon::now()->addDays(14);
        $vendor = [
            "name" => "PT LAWAN TRANSAKSI",
            "npwp" => "11.111.111.1-111.111",
        ];
        $items = [
            [
                "name"=>"Barang 1",
                "quantity"=> 1,
                "unitPrice"=> 300000, // must be integer and NOT STRING
            ],
            [
                "name"=>"Barang 2",
                "quantity"=> 3,
                "unitPrice"=> 300000, // must be integer and NOT STRING
            ]
        ];
        $taxInvoice = $op->createTaxInvoice(
            $invoiceNumber, $invoiceDate, $invoiceDueDate, $vendor, $items
        );
        dd($taxInvoice);
    }
}
