<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>project</title>
        <meta name="viewport"  content="width=device-width, intial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <style>
        #add{
                padding:17px;padding-left:55px;width:300px;border:1px solid #f5f5f5;
                font-size:13px;color:gray;
                background-repeat:no-repeat;
                background-position:left center;outline:0;
        }
        dd{
            margin-bottom: 30px;
        }
        </style>
		
    </head>
    <body>
	<div class="container-fluid">
	<?php include './header.php';?>	
	<div class="row">
            <div class="col-sm-12" >
                <dl>
                    <dt><b>1. When do you process a Refund?</b></dt>
                    <dd>
                        Refunds are generally initiated in the following scenarios:
                        <ul>
                            <li>When Prepaid Orders are cancelled by Customer/Seller/eShop before delivery (Please read our Cancellation Policy)</li>
                            <li>If our courier partner is unable to deliver the order</li>
                            <li>If you wish to return the product, in accordance with our Return Policy</li>
                        </ul>
                    </dd>
                    <dt><b>2. What is the Return Policy?</b></dt>
                    <dd>
                        <ul>
                            <li>Return/Replacement request for any Order should be submitted within 10 days of receiving the Product. However, in case of Damaged/ Missing/ Empty Packages/Wrong Product the request should be raised within 2 days of receiving the product.</li>
                            <li>Refund/Replacement will be initiated only upon receiving of the product</li>
                            <li>Replacement will depend upon the availability of the product</li>
                            <li>In case the product was damaged while in your possession, eShop will not be under any liability to process the refund/replacement</li>
                            <li>Order Replacement can be done in following cases:
                                <br>-Wrong Size/ Color/ Style/ Quantity
                                <br>-Missing Parts/ Accessories & Empty Packages.
                                <br>-Defective/ Damaged (if not under Manufacturer's Warranty*)
                                <br>-Not as per descriptions</li>
                            <li>Return Package should have the original Price tag and Packaging slip</li>
                            <li>Few products are Non-Returnable. Please refer to the product page for further reference</li>
                            <li>For Manufacturer’s Warranty Products, you are required to visit the Brand Service Centre</li>
                        </ul>
                    </dd>
                    <dt><b>3. How long does it take to process Refund?</b></dt>
                    <dd>
                        Refund depends upon the mode of payment. Please refer to the list below:
                        <ul>
                            <li>CluesBucks: 1 - 2 Business days</li><li>Debit card: 7 - 9 Business days</li><li>Credit card: 10 - 15 Business days</li><li>NEFT : 4 Working Days</li><li>Wallets : 7 - 9 Working Days</li>
                        </ul>
                    </dd><p>In case of any clarification or If you have not received the refund within the stipulated time, kindly contact your banks customer care number to know the status of the transaction</p>
                    <dt><b>4. How long does it take to initiate a Refund?</b></dt>
                    <dd>
                        For some orders, we initiate Refund within 2 working days of receiving the product at our Centre In other cases, we initiate the Refund after the returned product is delivered to the seller. In this case, we keep you informed of the timelines.
                    </dd>
                    <dt><b>5. When does a Refund get declined?</b></dt>
                    <dd>
                        Refund may get declined if the product received by us is not as per your claim or Order ID is missing on the package.
                    </dd>
                    <dt><b>6. How do you process Refund for an order, purchased using a Gift Card?</b></dt>
                    <dd>
                        If order is placed using gift card as a mode of payment then refund will be credited in the form of CluesBucks in your eShop account.
                    </dd>
                    <dt><b>7. How can I track the status of my Refund?</b></dt>
                    <dd>
                       To check your refund status follow the path Login -> My orders -> Refund Status 
                    </dd>
                    <dt><b>8. Will my shipping charges be refunded if I ship the product?</b></dt>
                    <dd>
                        In case of Self-Shipment, eShop will reimburse the courier charges (upto Rs.300) in form of CluesBucks.
                    </dd>
                    <dt><b>9. How will I get my refund in case of payment mode is COD?</b></dt>
                    <dd>
                        The refund in case of COD shall be done as Store Credit in the form of CluesBucks to your eShop Registered Account. You can use these CluesBucks to purchase anything on eShop or have them credited back to your Bank Account. The amount of CluesBucks shall be credited into your bank account, the details for which have been provided by you to us.
                        <br><br>
                        Note : We don't refund in Cash
                    </dd>
                    <dt><b>10. How do I update my bank details ?</b></dt>
                    <dd>
                        <ul>
                            <li>Step 1 : Login with your registered email id</li><li>Step 2 : Go to "My Account"</li><li>Step 3 : Click on " My Profile"</li><li>Step 4 : Click on “Bank Details”</li><li>Step 5: Click on Add bank details, complete the relevant field</li><li>Step 6: Save Bank Details</li>
                        </ul>
                    </dd>
                </dl>             
            </div>
	</div>
        <?php include './footer.php'; ?>
       </div>
    </body>
</html>