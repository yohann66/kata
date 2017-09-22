private function sing() :array {
        $bottleNumber = 40;
        $singArray = [];

        for ($iterator = 0; $iterator < 40; $iterator++) {
            if ($bottleNumber === 1) {
                $singArray[] = '1 bottle of beer on the wall, 1 bottle of beer.';
                $singArray[] = 'Take one down and pass it around, no more bottles of beer on the wall.';
                break;
            }
            $singArray[] = $bottleNumber . " bottles of beer on the wall, " . $bottleNumber . " bottles of beer.";
            $bottleNumber--;
            $singArray[] = "Take one down and pass it around, " . $bottleNumber . " bottles of beer on the wall.";
        }

        $singArray[] = "No more bottles of beer on the wall, no more bottles of beer.";
        $singArray[] = "Go to the store and buy some more, 99 bottles of beer on the wall.";

        return $singArray;
}