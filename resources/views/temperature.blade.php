@extends('layouts.main')

@section('title', 'Conversor de temperatura')

@section('content')
<style>
  .card {

    box-shadow: 0em 0 0.4em black;
    width: 25%;

    max-width: 20rem;
    display: inline-block;
    margin-left: 3rem;
    margin-top: 0.1rem;
    justify-content: center;
  }

  .card-container {
    justify-content: center;
    align-items: center;
    
    margin-left: 2.5rem;
    margin-right: auto;

  }

  .form-group {
    margin-left: 3rem;
    margin-right: 3rem;
    max-width: 20rem;
    display: inline-block;
    margin-bottom: 3rem;
  }
</style>

<form method="post">
  @csrf
  <div class="form-group">
    <label for="temp" class="form-label mt-4">Temperatura</label>
    <input class="form-control" type="text" value=1 name="temp" id="temp">
  </div>
  <div class="form-group">
    <label class="form-label mt-4" for="origin">De:</label>
    <select class="form-select" name="origin" id="origin">
      <option value="0">Celsius (C)</option>
      <option value="1">Fahrenheit (F)</option>
      <option value="2">Kelvin (K)</option>
      <option value="3">Réaumur (Ré)</option>
      <option value="4">Rankine (Ra)</option>
      <option value="5">Luisius (Lu)</option>
    </select>
  </div>
  <div class="form-group">
    <label class="form-label mt-4" for="goal">Para:</label>
    <select class="form-select" name="goal" id="goal">
      <option value="0">Celsius (C)</option>
      <option value="1">Fahrenheit (F)</option>
      <option value="2">Kelvin (K)</option>
      <option value="3">Réaumur (Ré)</option>
      <option value="4">Rankine (Ra)</option>
      <option value="5">Luisius (Lu)</option>
    </select>
  </div>


  <div class="form-group">
    <label class="form-label mt-4" for="decimal_range">Casas Decimais:</label>
    <input class="form-control" type="text" value=2 name="decimal_range" id="decimal_range">
  </div>


  <input type="submit" value="Converter" class="btn btn-primary">

  <br>

  <?php
  function render_cards($card_list)
  {

    $bg = ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'dark'];
    $bg_counter = 0;
    echo '<div class="card-container">';
    foreach ($card_list as $card) {
      echo '<div class="card text-white bg-' . $bg[$bg_counter] . ' mb-3" >
        <div class="card-header">' . $card[0] . ' em ' . $card[1] . '</div>
        <div class="card-body">
           <h4 class="card-title">' . $card[2] . ' ' . $card[3] . '</h4>
           <h4 class="card-title">' . $card[4] . ' ' . $card[5] . '</h4>
        </div>
        </div>';
      if ($bg_counter == 0) {
        echo '<br>';
      }
      $bg_counter++;
    }
    echo '</div>';
  }
  render_cards($card_list);
  ?>
</form>
@endsection