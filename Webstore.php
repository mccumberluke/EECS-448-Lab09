<?php
    $item1 = $_POST["item1"];
    $item2 = $_POST["item2"];
    $item3 = $_POST["item3"];
    $amount1 = $_POST["amount1"];
    $amount2 = $_POST["amount2"];
    $amount3 = $_POST["amount3"];
    $ship = $_POST["ship"];

    $itemTot = 0;

    if($item1 == "99.99"){
        $item1Tot = $amount1*99.99;
        $itemTot = $itemTot+$item1Tot;
    }
    if($item2 == "0.10"){
        $item2Tot = $amount2*0.10;
        $itemTot = $itemTot+$item2Tot;
    }
    if($item3 == "399.99"){
        $item3Tot = $amount3*399.99;
        $itemTot = $itemTot+$item3Tot;
    }

    if($ship == "Free 7 Day"){
        $shipping += 0;
    }
    else if($ship == "Over night"){
        $shipping += 50;
    }
    else if($ship == "3 Day"){
        $shipping += 5;
    }
    $total = $itemTot + $shipping;

    echo "Receipt<br>";
    echo "<table border =\"1\" style='border-collapse: collapse'>
    <tr>
        <th> Quantity </th>
        <th> Cost Per Item </th>
        <th> Sub Total </th>
    <tr>
    <tr>
        <th> Item 1 </th>
        <td> $amount1 </td>
        <td> $item1 </td>
        <td> $item1Tot </td>
    <tr>
    <tr>
        <th> Item 2 </th>
        <td> $amount2 </td>
        <td> $item2 </td>
        <td> $item2Tot </td>
    <tr>
    <tr>
        <th> Item 3 </th>
        <td> $amount3 </td>
        <td> $item3 </td>
        <td> $item3Tot </td>
    <tr>
    <tr>
        <th> Shipping </th>
        <td> $ship </td>
        <td> $shipping </td>
    <tr>
    <tr>
        <th> Total Cost</th>
        <td> $total </td>
    <tr>";

?>