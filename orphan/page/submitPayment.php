<script>
window.onload = function() {
    document.forms[0].submit();
}
</script>


<div style="display: none;">
    
<?php
// Скріптік зверху сабмітить форму коли загрузиться сторінка (onload)
// Форма - це та зелена кнопка "Оплатить", ми згенеримо її нижче
// Шоб та срана кнопка нікому не мозолила очі, я сховав її під невидимий div
// Нет предела совершенству
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require("LiqPay.php"); // Підключаємо бібліотеку LiqPay.
    
    // Ключики. Не забудьте помінять на дані замовників !!!
    $public_key = 'i71382271416';
    $private_key = 'YEtoNIyeVMMSzSBo2w3gifM2hbyeEMuII1o5TU3C';

    // В $_POST є всі дані з форми, я запхав їх в опис платіжки.
    // Не знаю, чи це потрібно. Можете ці дані собі зберігати.
    // Бо нема сенсу показувати платнику його ж номер і емейл :)
    $description = 
        $_POST['name'] . "\r\n".
        $_POST['mail'] . "\r\n".
        $_POST['tel'] . "\r\n".
        $_POST['childname'];
        $price = $_POST['price'];

    // Створюємо екземпляр бібліотеки з нашими ключами 
    $liqpay = new LiqPay($public_key, $private_key);
    
    // Ця фігня згенерую нову форму разом з нещасною кнопкою, яку я сховав.
    // Заповняємо по документації, нічого складного
    $form = $liqpay->cnb_form(array(
        'version'        => '3',
        'action'         => 'paydonate',
        'amount'         => $price,
        'currency'       => 'UAH',
        'description'    => $description,
        // Можна ще щось вставити сюди :)
        'result_url'     => 'http://www.orphan-club.com/platizhka/'
    ));  
    
    // Запихаємо згенеровану кнопку в HTML
    echo($form);
}
?>

</div>