<?php

namespace Kloner\InvoiceDate\Model\Rewrite;

class Invoice extends \Magento\Sales\Model\Order\Invoice
{

    public function getInvoiceDate(){
        $cdate = $this->getCreatedAt();
        $invoiceDate = date('d. m. Y', strtotime($cdate));
        return $invoiceDate;
    }


}