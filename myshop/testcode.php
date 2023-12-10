<?php
// Assume you have some data array, replace it with your actual data source.
$data = array(
    array('id' => 1, 'name' => 'Item 1', 'category' => 'option1'),
    array('id' => 2, 'name' => 'Item 2', 'category' => 'option2'),
    array('id' => 3, 'name' => 'Item 3', 'category' => 'option1'),
    array('id' => 4, 'name' => 'Item 4', 'category' => 'option3'),
    // ... Add more data items as needed
);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the selected checkboxes
    $selectedFilters = isset($_POST['filter']) ? $_POST['filter'] : array();

    // Filter data based on selected checkboxes
    $filteredData = array_filter($data, function ($item) use ($selectedFilters) {
        return in_array($item['category'], $selectedFilters);
    });

    // Display filtered results
    foreach ($filteredData as $item) {
        echo '<p>ID: ' . $item['id'] . ', Name: ' . $item['name'] . ', Category: ' . $item['category'] . '</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox Filter</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

<form id="filterForm">
    <label><input type="checkbox" name="filter[]" value="option1"> Option 1</label>
    <label><input type="checkbox" name="filter[]" value="option2"> Option 2</label>
    <label><input type="checkbox" name="filter[]" value="option3"> Option 3</label>
    <button type="button" onclick="filterData()">Filter</button>
</form>

<div id="result"></div>

<script>
function filterData() {
    var formData = $('#filterForm').serialize();

    $.ajax({
        type: 'POST',
        url: 'filter.php',
        data: formData,
        success: function(response) {
            $('#result').html(response);
        }
    });
}
</script>

</body>
</html>
