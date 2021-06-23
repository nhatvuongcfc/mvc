<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cobardia (firebrick)</title>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="Invoicebus Invoice Template">
    <meta name="author" content="Invoicebus">

    <meta name="template-hash" content="baadb45704803c2d1a1ac3e569b757d5">

    <link rel="stylesheet" href="{{ asset('css/backend/bill.css') }}">
  </head>
  <body>
    <div id="container">
      <section id="memo">
        <div class="logo">
          <img data-logo="{company_logo}" />
        </div>
        
        <div class="company-info">
          <div>{company_name}</div>

          <br />
          
          <span>{company_address}</span>
          <span>{company_city_zip_state}</span>

          <br />
          
          <span>{company_phone_fax}</span>
          <span>{company_email_web}</span>
        </div>

      </section>

      <section id="invoice-title-number">
      
        <span id="title">{invoice_title}</span>
        <span id="number">{invoice_number}</span>
        
      </section>
      
      <div class="clearfix"></div>
      
      <section id="client-info">
        <span>{bill_to_label}</span>
        <div>
          <span class="bold">{client_name}</span>
        </div>
        
        <div>
          <span>{client_address}</span>
        </div>
        
        <div>
          <span>{client_city_zip_state}</span>
        </div>
        
        <div>
          <span>{client_phone_fax}</span>
        </div>
        
        <div>
          <span>{client_email}</span>
        </div>
        
        <div>
          <span>{client_other}</span>
        </div>
      </section>
      
      <div class="clearfix"></div>
      
      <section id="items">
        
        <table cellpadding="0" cellspacing="0">
        
          <tr>
            <th>{item_row_number_label}</th> <!-- Dummy cell for the row number and row commands -->
            <th>{item_description_label}</th>
            <th>{item_quantity_label}</th>
            <th>{item_price_label}</th>
            <th>{item_discount_label}</th>
            <th>{item_tax_label}</th>
            <th>{item_line_total_label}</th>
          </tr>
          
          <tr data-iterate="item">
            <td>{item_row_number}</td> <!-- Don't remove this column as it's needed for the row commands -->
            <td>{item_description}</td>
            <td>{item_quantity}</td>
            <td>{item_price}</td>
            <td>{item_discount}</td>
            <td>{item_tax}</td>
            <td>{item_line_total}</td>
          </tr>
          
        </table>
        
      </section>
      
      <section id="sums">
      
        <table cellpadding="0" cellspacing="0">
          <tr>
            <th>{amount_subtotal_label}</th>
            <td>{amount_subtotal}</td>
          </tr>
          
          <tr data-iterate="tax">
            <th>{tax_name}</th>
            <td>{tax_value}</td>
          </tr>
          
          <tr class="amount-total">
            <th>{amount_total_label}</th>
            <td>{amount_total}</td>
          </tr>
          
          <!-- You can use attribute data-hide-on-quote="true" to hide specific information on quotes.
               For example Invoicebus doesn't need amount paid and amount due on quotes  -->
          <tr data-hide-on-quote="true">
            <th>{amount_paid_label}</th>
            <td>{amount_paid}</td>
          </tr>
          
          <tr data-hide-on-quote="true">
            <th>{amount_due_label}</th>
            <td>{amount_due}</td>
          </tr>
          
        </table>

        <div class="clearfix"></div>
        
      </section>
      
      <div class="clearfix"></div>

      <section id="invoice-info">
        <div>
          <span>{issue_date_label}</span> <span>{issue_date}</span>
        </div>
        <div>
          <span>{due_date_label}</span> <span>{due_date}</span>
        </div>

        <br />

        <div>
          <span>{currency_label}</span> <span>{currency}</span>
        </div>
        <div>
          <span>{po_number_label}</span> <span>{po_number}</span>
        </div>
        <div>
          <span>{net_term_label}</span> <span>{net_term}</span>
        </div>
      </section>
      
      <section id="terms">

        <div class="notes">{terms}</div>

        <br />

        <div class="payment-info">
          <div>{payment_info1}</div>
          <div>{payment_info2}</div>
          <div>{payment_info3}</div>
          <div>{payment_info4}</div>
          <div>{payment_info5}</div>
        </div>
        
      </section>

      <div class="clearfix"></div>

      <div class="thank-you">{terms_label}</div>

      <div class="clearfix"></div>
    </div>

    <script src="http://cdn.invoicebus.com/generator/generator.min.js?data=data.js"></script>
  </body>
</html>
