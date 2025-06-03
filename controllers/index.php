<?php 

$_SESSION['name'] = 'Kuba';

$books = [
  [
    'title' => 'The Plague',
    'author' => 'Albert Camus',
    'year' => 1947,
    'purchaseUrl' => 'http://example.com'
  ],
  [
    'title' => 'Hail Mary',
    'author' => 'Andy Weir',
    'year' => 2021,
    'purchaseUrl' => 'http://example.com'
  ],
  [
    'title' => 'The Langoliers',
    'author' => 'Stephen King',
    'year' => 1990,
    'purchaseUrl' => 'http://example.com'
  ],
  [
    'title' => 'Tropic of Cancer',
    'author' => 'Henry Miller',
    'year' => 1934,
    'purchaseUrl' => 'http://example.com'
  ]
];

function filter($items, $fn) {
  $filteredItems = [];
  foreach($items as $item) {
    if($fn($item)) {
      $filteredItems[] = $item;
    }
  }
  return $filteredItems;
};

// $filteredBooks = array_filter($books, function($book) {
//   return $book['year'] < 2000;
// });

$filteredBooks = array_filter($books, fn($book) => $book['year'] < 2000 );

view("index.view.php", [
  'filteredBooks' => $filteredBooks
]);