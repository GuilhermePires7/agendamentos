@extends('layouts.main')
@section('title', 'Agendar um horário')
@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1 class="mt-2">Agende seu horário</h1>
    <form action="/schedules/create" method="post" enctype="multipart/form-data">
        @csrf
        {{-- <div class="form-group">
            <label for="image">Evento:</label>
            <input type="file" id="image" name="image" class="form-control-file">
        </div> --}}
        <div class="form-group">
            <label for="title">Seu nome:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome">
        </div>
        <div class="form-group">
            <label for="number">Telefone:</label>
            <input type="number" id="phone" name="phone" class="form-control" placeholder="Digite seu telefone">
        </div>
        <div class="form-group">
            <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Qual dia da sua ordem?</label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="week">
                <option selected>Escolher dia da semana...</option>
                <option value="domingo" name="week">DOMINGO</option>
                <option value="segunda" name="week">SEGUNDA</option>
                <option value="terca"name="week">TERÇA</option>
                <option value="quarta"name="week">QUARTA</option>
                <option value="quinta"name="week">QUINTA</option>
                <option value="sexta"name="week">SEXTA</option>
                <option value="sabado"name="week">SÁBADO</option>
            </select>
        </div>
        <div class="form-group radio-check">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="time" id="flexRadioDefault2" value="08:00 - 10:00">
                <label class="form-check-label" for="flexRadioDefault2">
                  08:00 - 10:00
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="time" id="flexRadioDefault1" value="10:00 - 12:00">
                <label class="form-check-label" for="flexRadioDefault1">
                    10:00 - 12:00
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="time" id="flexRadioDefault1" value="13:00 - 15:00">
                <label class="form-check-label" for="flexRadioDefault1">
                    13:00 - 15:00
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="time" id="flexRadioDefault2" value="15:00 - 17:00">
                <label class="form-check-label" for="flexRadioDefault2">
                    15:00 - 17:00
                </label>
              </div><div class="form-check">
                <input class="form-check-input" type="radio" name="time" id="flexRadioDefault1" value="17:00 - 19:00">
                <label class="form-check-label" for="flexRadioDefault1">
                    17:00 - 19:00
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="time" id="flexRadioDefault2" value="19:00 - 21:00">
                <label class="form-check-label" for="flexRadioDefault2">
                    19:00 - 21:00
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="time" id="flexRadioDefault1" value="21:00 - 23:00">
                <label class="form-check-label" for="flexRadioDefault1">
                  21:00 - 23:00
                </label>
              </div>

            {{-- <input class="btn btn-primary btn-lg active" type="button" value="08:00 - 10:00" role="button" aria-pressed="true">
            <input class="btn btn-primary" type="button" value="10:00 - 12:00">
            <input class="btn btn-primary" type="button" value="13:00 - 15:00">
            <input class="btn btn-primary" type="button" value="15:00 - 17:00">
            <input class="btn btn-primary" type="button" value="17:00 - 19:00">
            <input class="btn btn-primary" type="button" value="19:00 - 21:00">
            <input class="btn btn-primary" type="button" value="21:00 - 23:00"> --}}
        </div>
        <input type="submit" class="btn btn-primary" value="Agendar horário">
    </form>
</div>
@endsection
