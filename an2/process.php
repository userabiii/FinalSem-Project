<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="analysisstyle.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Dr.Sachith's Skin Clinic</title>
</head>
<body>
    <?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect responses from the form
    $age = $_POST['age'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $skinConcern = $_POST['skinConcerns'][0] ?? ''; 
    $skinType = $_POST['skinType'] ?? '';

    // Validate form inputs
    if (empty($age) || empty($gender) || empty($skinConcern) || empty($skinType)) {
        echo "Error: All fields are required.";
        exit; // Stop further execution
    }

    // Display quiz results
    echo "<h2 style='background-color:#a47c73; color: #fff; padding: 20px; margin-top: 0px; text-transform: uppercase;font-weight:bolder;'>Quiz Results</h2>";
    echo "<p style='margin-top: 10px;color:#a47c73; text-align: center;'><span style='font-size:18px;font-weight:bolder;'>Age:<br/></span>$age<br/></p>";
    echo "<p style='margin-top: 10px;color:#a47c73; text-align: center;'><span style='font-size:18px;font-weight:bolder;'>Gender:<br/></span>$gender<br/></p>";
    echo "<p style='margin-top: 10px;color:#a47c73; text-align: center;'><span style='font-size:18px;font-weight:bolder;'>Skin Concern:<br/></span>$skinConcern<br/></p>";
    echo "<p style='margin-top: 10px;color:#a47c73; text-align: center;'><span style='font-size:18px;font-weight:bolder;'>Skin Type:<br/></span>$skinType<br/></p>";

    // Define recommended products based on skin concern and type
    $recommendedProducts = array(
        'Acne' => array(
            'oily' => array(
                'name' => 'Product for Acne and Oily Skin',
                'image' => 'acne-oily.jpg',
                'description' => 'A daily serum formulated with pure Vitamin B3 (Niacinamide) and Matmarine. Niacinamide reduces the sebum level of the skin, improves the barrier & evens our skin tone. Matmarine is a perfect biotechnological ingredient to reduce excess sebum, shine, pores & spots.
                Ingredients

                Niacinamide

                A form of vitamin B3, Niacinamide is a superstar ingredient that repairs skin, reduces occurrence of acne, and fades blemishes. This formula uses Niacinamide in a high concentration of 10%

                Matmarine

                Matmarine is a perfect biotechnological ingredient to reduce excess sebum, shine, pores & spots.

                Zinc

                It regulates sebum production and has anti-bacterial properties as well, making it highly suitable for oily / acne-prone skin

                Aqua, Niacinamide, Glycerin, Butylene Glycol, Dimethyl Isosorbide, Propanediol, Ethoxydiglycol, Acetyl Glucosamine, Pseudoalteromonas Ferment Extract, Zinc PCA, Zinc Glycinate, Allantoin, Sodium Hyaluronate, Hydroxyethylcellulose, Phenoxyethanol, Xanthan Gum, Lecithin, Sclerotium Gum, Pullulan, Ethylhexylglycerin',
            ),
            'dry' => array(
                'name' => 'Product for Acne and Dry Skin',
                'image' => 'acne-dry.jpg',
                'description' => 'Description of product for acne and dry skin.',
            ),
            'normal' => array(
                'name' => 'Product for Acne and normal Skin',
                'image' => 'acne-normal.jpg',
                'description' => 'Description of product for acne and normal skin.',
            ),
            'combination' => array(
                'name' => 'Product for Acne and combination Skin',
                'image' => 'acne-combination.jpg',
                'description' => 'Description of product for acne and combination skin.',
            ),
            'sensitive' => array(
                'name' => 'Product for Acne and sensitive Skin',
                'image' => 'acne-sensitive.jpg',
                'description' => 'Description of product for acne and sensitive skin.',
            ),
           
        ),
        'Blemishes' => array(
            'oily' => array(
                'name' => 'Product for Blemishes and Oily Skin',
                'image' => 'blemishes-oily.jpg',
                'description' => 'A daily serum formulated with pure Vitamin B3 (Niacinamide) and Matmarine. Niacinamide reduces the sebum level of the skin, improves the barrier & evens our skin tone. Matmarine is a perfect biotechnological ingredient to reduce excess sebum, shine, pores & spots.
                Ingredients

                Niacinamide

                A form of vitamin B3, Niacinamide is a superstar ingredient that repairs skin, reduces occurrence of acne, and fades blemishes. This formula uses Niacinamide in a high concentration of 10%

                Matmarine

                Matmarine is a perfect biotechnological ingredient to reduce excess sebum, shine, pores & spots.

                Zinc

                It regulates sebum production and has anti-bacterial properties as well, making it highly suitable for oily / acne-prone skin

                Aqua, Niacinamide, Glycerin, Butylene Glycol, Dimethyl Isosorbide, Propanediol, Ethoxydiglycol, Acetyl Glucosamine, Pseudoalteromonas Ferment Extract, Zinc PCA, Zinc Glycinate, Allantoin, Sodium Hyaluronate, Hydroxyethylcellulose, Phenoxyethanol, Xanthan Gum, Lecithin, Sclerotium Gum, Pullulan, Ethylhexylglycerin',
            ),
            'dry' => array(
                'name' => 'Product for blemishes and Dry Skin',
                'image' => 'blemishes-dry.jpg',
                'description' => 'Description of product for blemishes and dry skin.',
            ),
            'normal' => array(
                'name' => 'Product for blemishes and normal Skin',
                'image' => 'blemishes-normal.jpg',
                'description' => 'Description of product for blemishes and normal skin.',
            ),
            'combination' => array(
                'name' => 'Product for blemishes and combination Skin',
                'image' => 'blemishes-combination.jpg',
                'description' => 'Description of product for blemishes and combination skin.',
            ),
            'sensitive' => array(
                'name' => 'Product for blemishes and sensitive Skin',
                'image' => 'blemishes-sensitive.jpg',
                'description' => 'Description of product for blemishes and sensitive skin.',
            ),
        ),
        'Wrinkles' => array(
            'oily' => array(
                'name' => 'Product for wrinkles and Oily Skin',
                'image' => 'wrinkles-oily.jpg',
                'description' => 'A daily serum formulated with pure Vitamin B3 (Niacinamide) and Matmarine. Niacinamide reduces the sebum level of the skin, improves the barrier & evens our skin tone. Matmarine is a perfect biotechnological ingredient to reduce excess sebum, shine, pores & spots.
                Ingredients

                Niacinamide

                A form of vitamin B3, Niacinamide is a superstar ingredient that repairs skin, reduces occurrence of acne, and fades blemishes. This formula uses Niacinamide in a high concentration of 10%

                Matmarine

                Matmarine is a perfect biotechnological ingredient to reduce excess sebum, shine, pores & spots.

                Zinc

                It regulates sebum production and has anti-bacterial properties as well, making it highly suitable for oily / acne-prone skin

                Aqua, Niacinamide, Glycerin, Butylene Glycol, Dimethyl Isosorbide, Propanediol, Ethoxydiglycol, Acetyl Glucosamine, Pseudoalteromonas Ferment Extract, Zinc PCA, Zinc Glycinate, Allantoin, Sodium Hyaluronate, Hydroxyethylcellulose, Phenoxyethanol, Xanthan Gum, Lecithin, Sclerotium Gum, Pullulan, Ethylhexylglycerin',
            ),
            'dry' => array(
                'name' => 'Product for wrinkles and Dry Skin',
                'image' => 'wrinkles-dry.jpg',
                'description' => 'Description of product for wrinkles and dry skin.',
            ),
            'normal' => array(
                'name' => 'Product for wrinkles and normal Skin',
                'image' => 'wrinkles-normal.jpg',
                'description' => 'Description of product for wrinkles and normal skin.',
            ),
            'combination' => array(
                'name' => 'Product for wrinkles and combination Skin',
                'image' => 'wrinkles-combination.png',
                'description' => 'Description of product for wrinkles and combination skin.',
            ),
            'sensitive' => array(
                'name' => 'Product for wrinkles and sensitive Skin',
                'image' => 'wrinkles-sensitive.jpg',
                'description' => 'Description of product for wrinkles and sensitive skin.',
            ),
        ),
    );

    // Determine the recommended product based on the user's skin concern and type
    if (isset($recommendedProducts[$skinConcern][$skinType])) {
        $recommendedProduct = $recommendedProducts[$skinConcern][$skinType];

        // Display recommended product information
        echo "<div style='box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); margin: auto; padding: 20px; border: none; outline: none; border-radius: 10px; margin-top: 20px; margin-bottom: 50px; width:75%; background:#fff; color:#a47c73; text-align: center; font-size:18px;'>";
        echo "<h3>Recommended Product</h3>";
        echo "<br/><img src='images/{$recommendedProduct['image']}' alt='{$recommendedProduct['name']} 'width='auto' height='300''/><br><br>";
        echo "<strong>{$recommendedProduct['name']}</strong><br/><br/>";;
        echo "<div style='text-align:justify; padding:20px;'>";
        echo "{$recommendedProduct['description']}<br>";
        echo "</div>";
        echo "</div>";
    } else {
        echo "<p style='margin: auto; padding: 20px; border: none; outline: none; border-radius: 10px; margin-top: 10px; width:75%; background:#a47c73; color:#fff; text-align: center; font-size:18px;'>No recommended product found for the selected skin concern and type.</p>";
    }
} else {
    // If the form is not submitted, redirect the user to the form page or display an error message
    echo "<span style='color:#a47c73; text-align: center; font-size:18px; font-weight:bolder;margin-top:50px; margin-bottom:50px;'>Error: Form submission method not allowed.</span>";
}
?>
</body>
</html>
