<?php

namespace App\Services;

use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;

class OnlinePajakService
{

    protected $apiKey;
    protected $apiUrl;

    public function __construct(){
        $this->apiKey = config('onlinepajak.api_key');
        $this->apiUrl = App::isProduction() ? 'https://openapi.onlinepajak.com/v2.0' : 'https://openapi.demo-achilles.systems/v2.0';
    }

    public function createTaxInvoice(string $invoiceNumber, Carbon $invoiceDate, Carbon $invoiceDueDate, array $vendor, array  $items)
    {
        $invoice = [
            "commercialInvoiceNumber" => $invoiceNumber, // * Required
            "invoiceDate" => $invoiceDate->format('Y-m-d'), // * Required
            "invoiceDueDate" => $invoiceDueDate->format('Y-m-d'),
            "vendor" => $vendor,
            "items" => $items,
            "taxSummary" => [
                "ppn" => [
                    "invoiceType" => "A2"
                ]
            ]
        ];

        $post = Http::baseUrl($this->apiUrl)
            ->withHeaders([
                'Authorization' => $this->apiKey,
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ])
            ->withQueryParameters([
                'autoApproval'=>true,
                'autoCalculate'=>true
            ])
            ->post('/invoices/sale', $invoice);

        return $post->json();
    }
}
