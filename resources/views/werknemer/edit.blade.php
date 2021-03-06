@extends('layout')
@section('head')
    <style>
    .label{
        color:white;
    }
    .mainform{
        padding: 0 100%;
    }
    </style>
@endsection

@section('inhoud')
    <div id="content">
        <form method="post" action="{{route('werknemer.update', $werknemer)}}" class="mainform">
            @csrf
            @method('PUT')

            <div class="field">
                <label class="label" for="vnaam">voornaam</label>

                <div class="control">
                    <input class="input @error('vnaam') is-danger @enderror" type="text" name="vnaam" id="vnaam"
                           value="{{$werknemer->vnaam}}">
                    @error('vnaam')
                    <p class="alert is-danger">{{ $errors->first('vnaam') }}</p>
                    @enderror
                </div>
            </div>
            <div class="field">
                <label class="label" for="anaam">achternaam</label>
                <div class="control">
                    <input class="input @error('anaam') is-danger @enderror" type="text" name="anaam" id="anaam"
                           value="{{$werknemer->anaam}}">
                    @error('anaam')
                    <p class="alert is-danger">{{ $errors->first('anaam') }}</p>
                    @enderror
                </div>
            </div>
            <div class="field">
                <label class="label" for="plaats">plaats</label>
                <div class="control">
                    <input class="input @error('plaats') is-danger @enderror" type="text" name="plaats" id="plaats"
                           value="{{$werknemer->plaats}}">
                    @error('plaats')
                    <p class="alert is-danger">{{ $errors->first('plaats') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="postcode">postcode</label>
                <div class="control">
                    <input class="input @error('postcode') is-danger @enderror" type="text" name="postcode"
                           id="postcode" value="{{$werknemer->postcode}}">
                    @error('postcode')
                    <p class="alert is-danger">{{ $errors->first('postcode') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="hnummer">huisnummer</label>
                <div class="control">
                    <input class="input @error('hnummer') is-danger @enderror" type="text" name="hnummer" id="hnummer"
                           value="{{$werknemer->postcode}}">
                    @error('hnummer')
                    <p class="alert is-danger">{{ $errors->first('hnummer') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="straat">straat</label>
                <div class="control">
                    <input class="input @error('straat') is-danger @enderror" type="text" name="straat" id="straat"
                           value="{{$werknemer->straat}}">
                    @error('straat')
                    <p class="alert is-danger">{{ $errors->first('straat') }}</p>
                    @enderror
                </div>
            </div>
            <div class="field">
                <label class="label" for="telnummer">telnummer</label>
                <div class="control">
                    <input class="input @error('telnummer') is-danger @enderror" type="text" name="telnummer"
                           id="telnummer" value="{{$werknemer->telnummer}}">
                    @error('telnummer')
                    <p class="alert is-danger">{{ $errors->first('telnummer') }}</p>
                    @enderror
                </div>
            </div>
            <div class="field">
                <label class="label" for="telnummer">functie</label>
                <div class="control">
                    <input class="input @error('functie') is-danger @enderror" type="text" name="functie"
                           id="functie" value="{{$werknemer->functie}}">
                    @error('functie')
                    <p class="alert is-danger">{{ $errors->first('functie') }}</p>
                    @enderror
                </div>
            </div>
            <div class="field">
                <label class="label" for="bedrijf_id">bedrijf</label>
                <div class="control">
                    <select id="bedrijven" class="input @error('bedrijf_id') is-danger @enderror" name="bedrijf_id" id="bedrijf_id" value="{{old('bedrijf_id')}}" >
                        @foreach($bedrijven as $key=>$value)

                            <option value="{{$key}}" {{($key==$werknemer->bedrijf_id)? 'selected' : '' }}>{{$value}}</option>

                        @endforeach
                    </select>
                    @error('bedrijf_id')
                    <p class="alert is-danger">{{ $errors->first('bedrijf_id') }}</p>
                    @enderror
                </div>
            </div>
            <input type="submit" value="bewerk">

        </form>
    </div>

@endsection
