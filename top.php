
<?php
error_reporting(1);
include './language.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multilanguage</title>
    <link rel="stylesheet" href="<?php echo 'http://localhost/PHP_small_projects/Multi-language'; ?>/style.css?v=<?php echo time(); ?>" />
</head>
<body>
        <div class="nav">
            <ul>
                <li><a href="<?php echo 'http://localhost/PHP_small_projects/Multi-language'; ?>">
                      <?php echo $navigation[$language][0]; ?></a>
                </li>
                <li><a href="<?php echo 'http://localhost/PHP_small_projects/Multi-language/about'; ?>">
                      <?php echo $navigation[$language][1]; ?></a>
                </li>
                <li><a href="<?php echo 'http://localhost/PHP_small_projects/Multi-language/contact'; ?>">
                      <?php echo $navigation[$language][2]; ?></a>
                </li>
                <li>
                    <select name="language" id="language" class="fright">
                        <?php
                        $langArr = [
                            'en' => 'English',
                            'bn' => 'Bengali',
                        ];
                        foreach ($langArr as $langKey => $langList) { ?>
                        <option value="<?php echo $langKey; ?>"
                        <?php if ($language === $langKey) { ?>
                           selected="selected"
                           <?php } ?>
                        >
                        <?php echo $langList; ?>
                        </option>
                            <?php }
                        ?>
                    </select>
                </li>
            </ul>
        </div>