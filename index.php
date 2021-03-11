<html>
  <head>
    <title>Lord of the Rings</title>
    <link href="style.css" rel="stylesheet">
  </head>
  <body>
      <h1>There and Back again</h1>
      <form action method="post">
        <label>How many paragraphs?
          <select name="paragraph">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
          <input type="submit">
        </label>
      </form>
    
    <?php
    $paragraph_list = $_POST['paragraph'];

# create array with at least 100 words - mine only has 40. Be sure to include other common sentence words
$word_list = ["one ring", "rivendell", "mordor", "orc", "gandalf", "balrog", "elendi", "arwen", "erabor", "misty mountain", "blue mountain", "durin", "moria", "sauraman", "gondor", "rohan", "precious", "elf", "sunlight", "dwarf", "goblin", "axe", "wraith", "nazgul", "horses", "flag", "sword", "bow", "archer", "white tree", "fire", "abyss ", "rain", "grey", "boats", "undead", "riders", "warg", "lake town", "dale", "two towers","the nine", "durin folk", "black gate", "smeagul", "baggins", "green dragon", "pint", "shire", "helms deep", "minas tirith", "minas iltil", "minas morgul", "angmar", "lady of light", "horse master"."dragon slayer", "trolls" , "witch king", "warchief", "urks", "dragon", "legolas", "elrond", "palantir", "aragorn", "gimli", "thorin", "balin", "lord of moria", "grey pilgrim", "white rider", "helm hammerhand","oakenshield", "leafgreen", "bag ends", "dwarf ring", "mortal", "hobbit","frodo", "sam", "pippin", "merry", "gollum", "staff", "magic", "mythril", "catapult", "grond", "azok", "rohirrim", "boats", "mithrandir", "sauron", "bree", "longbottom leaf", "pipe", "black ships", "army", "broken", "tower","great eye", "poison", "knife", "nightfall", "gold", "silver fountain", "lake", "jewels", "miners", "black speech", "cheese", "fish", "speech"];

$total_words = rand(5, 15);
$total_sentence = rand(5, 15);
$tot_words = count($word_list);

$my_sentence =" ";
$paragraph="";
$final ="";

for($i = 1; $i <= $paragraph_list; $i++) { //paragraph 

  for ($j = 0; $j < $total_sentence; $j++){ //sentence
    
    for($k =0; $k < $total_words; $k++) { //words

    #randomly select an array index to PICK a word from our word list
    # note that I am subtracting one since the word count is 1 more than the index since we start at 0
    $this_index = (rand(0,($tot_words-1)));

    # add the new string onto the existing string 
    $my_sentence = $my_sentence . " " . $word_list[$this_index];

    }//third loop 
    
    $total_words = rand(5, 15);
    $paragraph = $paragraph . " " . ucfirst(trim($my_sentence)) . ".";
    $my_sentence = "";

  } //second loop
  $total_sentence = rand(5, 15);
  $final = $final . " <p>" .$paragraph . "</p>";
  $paragraph ="";

}//first loop
echo $final;
?>
  </body>
  <footer>&copy Steven Tran</footer>
</html>