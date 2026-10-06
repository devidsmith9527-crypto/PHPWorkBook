<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import External Files</title>
</head>
<body>
    <?php
        /*
            Import External Files: គឺជាការយក File មួយដែលមាន Code PHP ឬ HTML មកប្រើនៅក្នុង File ផ្សេងទៀត។
            យក Content របស់ File មួយមកប្រើនៅក្នុង File ផ្សេងទៀត។ 
            ១. include(): គឺជាការយក File មួយមកប្រើនៅក្នុង File ផ្សេងទៀត។ ប្រសិនបើ File មិនមានវានឹងបង្ហាញ Warning Error ប៉ុន្តែ Code នៅក្រោមនឹងបន្តដំណើរការ។(ការងារដាច់ដោយឡែកពីគ្នា)
            ២. require(): គឺជាការយក File មួយមកប្រើនៅក្នុង File ផ្សេងទៀត។ ប្រសិនបើ File មិនមានវានឹងបង្ហាញ Fatal Error ហើយ Code នៅក្រោមនឹងមិនដំណើរការ។(ការងារបន្តគ្នាជាសេរី)
            ៣. include_once(): គឺជាការយក File មួយមកប្រើនៅក្នុង File ផ្សេងទៀត។ ប្រសិនបើ File មិនមានវានឹងបង្ហាញ Warning Error ប៉ុន្តែ Code នៅក្រោមនឹងបន្តដំណើរការ។(ការងារដាច់ដោយឡែកពីគ្នា) ហើយវានឹងយក File មួយតែម្ដងប៉ុណ្ណោះ។
            ៤. require_once(): គឺជាការយក File មួយមកប្រើនៅក្នុង File ផ្សេងទៀត។ ប្រសិនបើ File មិនមានវានឹងបង្ហាញ Fatal Error ហើយ Code នៅក្រោមនឹងមិនដំណើរការ។(ការងារបន្តគ្នាជាសេរី) ហើយវានឹងយក File មួយតែម្ដងប៉ុណ្ណោះ។
        */        
    ?>
    <?php  include_once('import/header.php') ?>
    <?php  include('import/header.php') ?>
    <p>
        Starter
    </p>
    <?php include_once('import/footer.php') ?>
    </body>
</html>