<!DOCTYPE html>
<html>
<head>
<title> Lender Form</title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link href="../assets/jquery.signaturepad.css" rel="stylesheet">
 <!-- JS & CSS library of MultiSelect plugin -->
<script src="jquery.multi-select.min.js"></script>
<link rel="stylesheet" href="jquery.multiselect.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="https://igniteui.com/js/modernizr.min.js"></script>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>
<script src="https://cdn-na.infragistics.com/igniteui/latest/js/infragistics.core.js"></script>
<script src="https://cdn-na.infragistics.com/igniteui/latest/js/infragistics.lob.js"></script>
<link href="https://cdn-na.infragistics.com/igniteui/latest/css/themes/infragistics/infragistics.theme.css" rel="stylesheet"></link>
<link href="https://cdn-na.infragistics.com/igniteui/latest/css/structure/infragistics.css" rel="stylesheet"></link>
<link rel="stylesheet" href="style2.css"/>
</head>
<body>

<div class="wrapper">
  <div class="container">
    <h1>LENDER ONBOARDING CRITERIA</h1>
    <br>
    <form>
    <h2>COMPANY INFORMATION</h2>
    <div class="form-group">

    
    <input type="text" class="form-control" id="coname">
          <label for="coname">Company Name</label>
          <div class="line"></div>
      </div>
    <div class="form-row">
        <div class="form-group col-md-6">
          <input type="text" class="form-control" id="addln1">
          <label for="addln1">Address</label>
          <div class="line"></div>
        </div>
        <div class="form-group col-md-6">
        <input type="text" class="form-control" id="addln2">
          <label for="addln2">Address Line 2</label>
          <div class="line"></div>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <input type="text" class="form-control" id="city">
          <label for="city">City</label>
          <div class="line"></div>
        </div>
        <div class="form-group col-md-6">
        <select id="province" class="form-control">
                <option disabled selected value="" class="form-select-placeholder"></option>
                <option value="AB">Alberta</option>
                                    <option value="BC">British Columbia</option>
                                    <option value="MB">Manitoba</option>
                                    <option value="NB">New Brunswick</option>
                                    <option value="NL">Newfoundland and Labrador</option>
                                    <option value="NS">Nova Scotia</option>
                                    <option value="ON">Ontario</option>
                                    <option value="PE">Prince Edward Island</option>
                                    <option value="QC">Quebec</option>
                                    <option value="SK">Saskatchewan</option>
                                    <option value="NT">Northwest Territories</option>
                                    <option value="NU">Nunavut</option>
                                    <option value="YT">Yukon</option>
            </select>
          <label for="province">Province</label>
          <div class="line"></div>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <input type="text" class="form-control" id="postal">
          <label for="postal">Postal Code</label>
          <div class="line"></div>
        </div>
        <div class="form-group col-md-4">
        <select id="country" class="form-control">
                <option disabled selected value="" class="form-select-placeholder"></option>
                <option value="US">CANADA</option>
                                    <option value="USA">USA</option>
                                   
            </select>
          <label for="country">Country</label>
          <div class="line"></div>
        </div>
        <div class="form-group col-md-4">
        <input id="phonenumber" class="form-control" type="tel" required/>
          <label for="postal">Phone Number</label>
          <div class="line"></div>                
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <input type="text" class="form-control" id="contname">
          <label for="contname">Contact Name</label>
          <div class="line"></div>
        </div>
        <div class="form-group col-md-6">
        <input type="email" class="form-control" id="contemail">
          <label for="contemail">Contact Email</label>
          <div class="line"></div>
        </div>
      </div>
      <div class="form-row">
        
        <div class="form-group col-md-6">
        <select id="login" class="form-control">
                <!-- <option disabled selected value="Choose" class="form-control"></option> -->
                <option selected>Choose...</option>
                <option value="one">1</option>
                                    <option value="two">2</option>
                                    <option value="three">3</option>
                                    <option value="four">4</option>
                                    <option value="five">5</option>
                                  
            </select>
          <label for="login">No. of Access Login    </label>
          <div class="line"></div>
        </div>
        <div class="form-group col-md-6">
          <input type="url" class="form-control" id="website">
          <label for="website">Website</label>
          <div class="line"></div>
        </div>
      </div>
   
      <div class="form-row">
        <div class="form-group col-md-6">
          <input type="text" class="form-control" id="lend_admin">
          <label for="lend_admin">Lender Adminstrator #</label>
          <div class="line"></div>
        </div>
        <div class="form-group col-md-6">
        <input type="text" class="form-control" id="mort_brok">
          <label for="mort_brok">Mortgage Brokerage No.</label>
          <div class="line"></div>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
        <select id="lendertype" class="form-control">
                <!-- <option disabled selected value="Choose" class="form-control"></option> -->
                <option selected>Choose...</option>
                <option value="Institutional Lender">Institutional Lender</option>
                                    <option value="Private Mortgage Lender">Private Mortgage Lender</option>
                                    <option value="Private Equity Lender">Private Equity Lender</option>
                                    <option value="Private Real Estate Lender">Private Real Estate Lender</option>
                                    <option value="Equipment Lender">Equipment Lender</option>
                                    <option value="Accounts Receviable Lender $100,000- $200,0000">Accounts Receivable Lender $100,000-$2,000,000</option>
                                    <option value="Accounts Receivable Lender $2,000,000 +">Accounts Receivable Lender $2,000,000 +</option>
                                    <option value="Construction Lender">Construction Lender</option>
                                    <option value="Factoring">Factoring</option>
                                    <option value="Asset Based Lender">Asset Based Lender</option>
                                    <option value="Trust Company">Trust Company</option>
                                  
            </select>
          <label for="lendertype">Lender Type</label>
          <div class="line"></div>
        </div>
        <div class="form-group col-md-6">
        <select id="loan_designation" class="form-control">
                <!-- <option disabled selected value="Choose" class="form-control"></option> -->
                <option selected>Choose...</option>
                <option value="one">Conventional Commerical Loan</option>
                                    <option value="two">Sub-Conventional Commerical Loan</option>
                                    <option value="three">Alternative Loan</option>
                                    <option value="four">Private Loan</option>
                                  
                                  
            </select>
          <label for="loan_designation">Loan Designation</label>
          <div class="line"></div>
        </div>
</div>
        <h2>LENDER CRITERIA</h2>
        <br>
        <div class="form-row">
      <div class="form-group col-md-6">
      <select id="asset_type" class="form-control">
                <!-- <option disabled selected value="Choose" class="form-control"></option> -->
                <option selected>Choose...</option>
                <option value="Automobile">Automobile</option>
                                    <option value="Account Receivables">Account Receivables</option>
                                    <option value="Cash">Cash</option>
                                    <option value="Equipment">Equipment</option>
                                    <option value="inventory(New/In Production)">Inventory(New /In Production)</option>
                                    <option value="Inventory(Aged upto 12 Months)">Inventory(Aged upto 12 Months)</option>
                                    <option value="Real Estate(Commercial)">Real Estate(Commercial)</option>
                                    <option value="Real Estate(Residential)">Real Estate(residential)</option>
                                  
            </select>
          <label for="asset_type">Asset Type</label>
          <div class="line"></div>
        </div>
        <div class="form-group col-md-6">
        <select id="loantype" class="form-control">
        <option value="one">Working Capital</option>
                                    <option value="two">Bridge Loan</option>
                                    <option value="three">Accounts Receivable Financing</option>
                                    <option value="four">Purchase Order Financing</option>
                                    <option value="five">Equipment Financing</option>
                                    <option value="five">Land Development Financing</option>
                                    <option value="five">Construction Financing</option>
                                    <option value="five">Mezzanine Financing(Mezz Debt)</option>
                                    <option value="five">Debtor-In-Possession Financing(DIP)</option>
                                    <option value="five">Tech Start-Up/Fintech Funding</option>
                                    <option value="five">Securitization </option>
</select>
<label for="loantype">Loan Type</label>         
          <div class="line"></div>
        </div> 
</div>
          <div class="form-row">
      <div class="form-group col-md-6">
      <select id="borrower_type" class="form-control">
                <!-- <option disabled selected value="Choose" class="form-control"></option> -->
                <option selected>Choose...</option>
                <option value="Auto Dealers">Auto Dealers</option>
                                    <option value="Construction Developers">Construction Developers</option>
                                    <option value="Distributors">Distributors</option>
                                    <option value="Hospitality Services">Hospitality Services</option>
                                    <option value="Importers/Exporters">Importers/Exporters</option>
                                    <option value="Manufactures">Manufactures</option>
                                    <option value="Online Sellers">Online Sellers</option>
                                    <option value="Professional Corporations">Professional Corporations</option>
                                    <option value="Property Owners">Property Owners</option>
                                    <option value="Real Estate Developers">Real Estate Developers</option>
                                    <option value="Rental Property Owners">Rental Property Owners</option>
                                    <option value="Restaurant Owner">Restaurant Owner</option>
                                    <option value="Retailer">Retailer</option>
                                    <option value="Tech Corporations">Tech Corporations</option>
                                    <option value="Other">Other</option>
                                  
            </select>
          <label for="borrower_type">Borrower Type</label>
          <div class="line"></div>
        </div>
        <div class="form-group col-md-6">
        <select id="loanamt" class="form-control">
                <!-- <option disabled selected value="Choose" class="form-control"></option> -->
                <option selected>Choose...</option>
                <option value="$0-$250,000">$0-$250,000</option>
                                    <option value="$250,000-$500,000">$250,000-$500,000</option>
                                    <option value="$500,000-$1,000,000">$500,000-$1,000,000</option>
                                    <option value="$1,000,000-$2,000,000">$1,000,000-$2,000,000</option>
                                    <option value="$2,000,000-$5,000,000">$2,000,000-$5,000,000</option>
                                    <option value="$5,000,000-$10,000,000">$5,000,000-$10,000,000</option>
                                    <option value="$10,000,000 +">$10,000,000 +</option>
                                   
            </select>
          <label for="loanamt">Loan Amount</label>
          <div class="line"></div>
        </div>
</div>
 <div class="form-row">
      <div class="form-group col-md-3">
      <label for="loanamt">Geographic Boundaries</label>
              <div class="checkbox">
                <label for="North"><input id="North" type="checkbox" checked=""/>North</label>
            </div>
          
            <div class="checkbox">
                <label for="South"><input id="South" type="checkbox" checked=""/>South</label>
            </div>
            <div class="checkbox">
                <label for="East"><input id="East" type="checkbox" checked=""/>East</label>
            </div>
            <div class="checkbox">
                <label for="West"><input id="West" type="checkbox" checked=""/>West</label>
            </div>
</div>
        <div class="form-group col-md-3">
        <select id="North" class="form-control">
              
              <option selected>Choose...</option>
              <option value="$0-$250,000">$0-$250,000</option>
                                  <option value="$250,000-$500,000">$250,000-$500,000</option>
                                  <option value="$500,000-$1,000,000">$500,000-$1,000,000</option>
                                  <option value="$1,000,000-$2,000,000">$1,000,000-$2,000,000</option>
                                  <option value="$2,000,000-$5,000,000">$2,000,000-$5,000,000</option>
                                  <option value="$5,000,000-$10,000,000">$5,000,000-$10,000,000</option>
                                  <option value="$10,000,000 +">$10,000,000 +</option>
                                 
          </select>
        
        <div class="line"></div>
        
        
        <select id="North" class="form-control">
              
              <option selected>Choose...</option>
              <option value="$0-$250,000">$0-$250,000</option>
                                  <option value="$250,000-$500,000">$250,000-$500,000</option>
                                  <option value="$500,000-$1,000,000">$500,000-$1,000,000</option>
                                  <option value="$1,000,000-$2,000,000">$1,000,000-$2,000,000</option>
                                  <option value="$2,000,000-$5,000,000">$2,000,000-$5,000,000</option>
                                  <option value="$5,000,000-$10,000,000">$5,000,000-$10,000,000</option>
                                  <option value="$10,000,000 +">$10,000,000 +</option>
                                 
          </select>
        
        <div class="line"></div>
        <select id="North" class="form-control">
              
              <option selected>Choose...</option>
              <option value="$0-$250,000">$0-$250,000</option>
                                  <option value="$250,000-$500,000">$250,000-$500,000</option>
                                  <option value="$500,000-$1,000,000">$500,000-$1,000,000</option>
                                  <option value="$1,000,000-$2,000,000">$1,000,000-$2,000,000</option>
                                  <option value="$2,000,000-$5,000,000">$2,000,000-$5,000,000</option>
                                  <option value="$5,000,000-$10,000,000">$5,000,000-$10,000,000</option>
                                  <option value="$10,000,000 +">$10,000,000 +</option>
                                 
          </select>
        
        <div class="line"></div>
        <select id="North" class="form-control">
              
              <option selected>Choose...</option>
              <option value="$0-$250,000">$0-$250,000</option>
                                  <option value="$250,000-$500,000">$250,000-$500,000</option>
                                  <option value="$500,000-$1,000,000">$500,000-$1,000,000</option>
                                  <option value="$1,000,000-$2,000,000">$1,000,000-$2,000,000</option>
                                  <option value="$2,000,000-$5,000,000">$2,000,000-$5,000,000</option>
                                  <option value="$5,000,000-$10,000,000">$5,000,000-$10,000,000</option>
                                  <option value="$10,000,000 +">$10,000,000 +</option>
                                 
          </select>
        
        <div class="line"></div>
</div>

         <div class="form-group col-md-6">
         <input type="text" class="form-control" id="lendingterms">
          <label for="lendingterms">Lending Terms</label>
          <div class="line"></div>
        </div>
</div>
<div class="form-row">
        <div class="form-group col-md-6">
        <select id="interestrate" class="form-control">
              <option selected>Choose...</option>
              <option value="0-3.99%">0-3.99%</option>
                                  <option value="4%-5.99%">4%-5.99%</option>
                                  <option value="6%-7.99%">6%-7.99%</option>
                                  <option value="8%-9.99%">8%-9.99%</option>
                                  <option value="10%-11.99%">10%-11.99%</option>
                                  <option value="12%-14.99%">12%-14.99%</option>
                                  <option value="15%-17.99%">15%-17.99%</option>
                                  <option value="18%-23.99%">18%-23.99%</option>
                                  <option value="24% and up">24% and up</option>
                                 
          </select>
        
          <label for="interestrate">Interest Rate</label>
          <div class="line"></div>
        </div>
        <div class="form-group col-md-6">
        <select id="depositreq" class="form-control">
              <option selected>Choose...</option>
              <option value="5% of loan amount">5% of loan amount</option>
                                  <option value="10% of loan amount">10% of loan amount</option>
                                  <option value="15% of loan amount">15% of loan amount</option>
                                  <option value="20% of loan amount">20% of loan amount</option>
                                  <option value="Specify amount required">Specify amount required</option>
</select>
          <label for="depositreq">Deposit Requirements</label>
          <div class="line"></div>
        </div>
      </div>
      <div class="form-row">
      <div class="form-group col-md-6">
            <label for="documentreq" class="combo-label">Documents Requirements</label>
        <div id="checkboxSelectCombo"></div>
        </div>
        <div class="form-group col-md-6">
        <select id="lendingfees" class="form-control">
              <option selected>Choose...</option>
              <option value="0.5-1.0%">0.5-1%</option>
                                  <option value="1%-2%">1% - 2%</option>
                                  <option value="2%- 4%">4% - 4%</option>
                                  <option value="4%- 5%">4% - 5%</option>
                                  <option value="5% & up">5% & up</option>
</select>
            <label for="lendingfees" class="combo-label">Lending Fees</label>
            <div class="line"></div>
        </div>

      </div>

    </form>
  </div>
</div>
<script>
function checkValue(element) {
  // check if the input has any value (if we've typed into it)
  if ($(element).val())
    $(element).addClass('has-value');
  else
    $(element).removeClass('has-value');
}

$(document).ready(function() {
  // Run on page load
  $('.form-control').each(function() {
    checkValue(this);
  })
  // Run on input exit
  $('.form-control').blur(function() {
    checkValue(this);
  });

});
$(function () {
var docreq = [
            { Name: "Finance Application" },
            { Name: "Mortgage Application" },
            { Name: "Articles of Incorporation" },
            { Name: "Shareholder Agreements" },
            { Name: "Officer & Directors Ledgers" },
            { Name: "Trade License(if applicable)" },
            { Name: "Credit Bureau(for borrower & company)" },
            { Name: "Company Financials(previous 2 years, accountant prepared)" },
            { Name: "Bank Statements(90-120 days)" },
            { Name: "Asset Analysis docs or purchase orders(for inventory & equipment)"},
            { Name: "Purchase & Sale Agreement(for real estate)"},
            { Name: "Land Appraisal(for real estate)"},
            { Name: "Existing loan documentation"}
            
        ];

        $(function () {
          $("#checkboxSelectCombo").igCombo({
                width: 300,
                dataSource: docreq,
                textKey: "Name",
                valueKey: "Name",
                multiSelection: {
                    enabled: true,
                    showCheckboxes: true
                },
                dropDownOrientation: "bottom"
            });        });
});


</script>
</body>
</html>
