<!--

==========================================================================
* Domodigital MX - Plantilla Dashboard
==========================================================================

* Copyright 2021 Domodigital (https://www.domodigital.com.mx)

* Designed and coded by Domodigital

--------------------------------------------------------------------------

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal. Contact us if you want to remove it.

-->

<?PHP view('layout/head'); ?>
<body>
   <?PHP view('layout/header'); ?>
   <?PHP view('layout/nav'); ?>
   <?PHP view('layout/aside'); ?>
   <main>
      <?PHP view('view'); ?>
   </main>
   <?PHP view('layout/footer'); ?>
</body>