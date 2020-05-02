<?php
if (!isset($_GET['pid'])) {
    exit("Error, Incomplete URL");
}
else{

}

require("process/header.php");
?>

<div class="product-details content">
    <div class="container">
        <div class="col-md-6">
            <div class="main-image">
                <img src="img/3700x-500x500.jpg">
            </div>
        </div>
        <div>
            <div class="col-md-6">
                <div id="product" class="cart-option">
                    <h1>
                        Asus PRIME H310MK R2.0 8th Gen mATX Motherboard
                    </h1>
                    <div class="price-wrap">
                        <ins>6700</ins>
                    </div>
                    <button id="button-cart" class="btn submit-btn">Add to cart</button>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-head">Specification:</h3>
                    <table class="data-table">
                        <thead>
                        <tr>
                            <td class="heading-row" colspan="3">Basic Information</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="name">Name</td>
                            <td class="value">Intel® Socket 1151 for 8th Generation Core™ i7/Core™ i5/Core™
                                i3/Pentium®/Celeron® Processors
                            </td>
                        </tr>
                        <tr>
                            <td class="name">Company</td>
                            <td class="value">Intel H310</td>
                        </tr>
                        <tr>
                            <td class="name">Stock Status</td>
                            <td class="value">128 Mb Flash ROM, UEFI AMI BIOS, PnP, SM BIOS 3.1, ACPI 6.1,
                                MultilanguageBIOS, ASUS EZ Flash 3, CrashFree BIOS 3, F6 Qfan Control, F3
                                MyFavorites,
                                Last Modified log, F12 PrintScreen, and ASUS DRAM SPD (SerialPresence Detect) memory
                                information
                            </td>
                        </tr>
                        <tr>
                            <td class="name">Price</td>
                            <td class="value">mATX Form Factor <br>
                                8.9 inch x 7.3 inch ( 22.6 cm x 18.5 cm )
                            </td>
                        </tr>
                        </tbody>
                        <thead>
                        <tr>
                            <td class="heading-row" colspan="3">Memory</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="name">Type</td>
                            <td class="value">DDR4</td>
                        </tr>
                        <tr>
                            <td class="name">Slots</td>
                            <td class="value">2 x DIMM</td>
                        </tr>
                        <tr>
                            <td class="name">Supported Memory</td>
                            <td class="value">Supports Intel® Extreme Memory Profile (XMP)
                            </td>
                        </tr>
                        <tr>
                            <td class="name">Maximum Mamory</td>
                            <td class="value">32GB</td>
                        </tr>
                        </tbody>
                        <thead>
                        <tr>
                            <td class="heading-row" colspan="3">Warranty Information</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="name">Manufacturing Warranty</td>
                            <td class="value">03 Years</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php require_once("process/footer.php"); ?>
