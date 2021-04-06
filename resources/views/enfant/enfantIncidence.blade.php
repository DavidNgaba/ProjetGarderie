@extends('enfant.enfant')
@section('content')

    {{-- Incidence --}}

    <form class="" action="{{ route('modifierincidence', $enfant) }}" method="post" novalidate>
        @csrf

        <div class="mb-3">

            <div class="mb-3">
                <label for="date_incidence" class="form-label">Date de l'incidence</label>
                <input type="date" class="form-control" name="date_incidence" id="date_incidence"
                    placeholder="Date de l'incidence" value="{{ old('date_incidence') }}" required>

                <div class="invalid-feedback">
                    Champ Vide ou invalide
                </div>
            </div>

            <div class="mb-3">
                <label for="heure_incidence" class="form-label">Heure de l'incidence</label>
                <input type="time" class="form-control" name="heure_incidence" id="heure_incidence"
                    placeholder="Heure de l'incidence" value="{{ old('heure_incidence') }}" required>

                <div class="invalid-feedback">
                    Champ Vide ou invalide
                </div>
            </div>


            <div class="mb-3">
                <textarea class="form-control" name="description_incidence" id="description_incidence"
                    placeholder="Description de l'incidence" required>{{ old('description_incidence') }}</textarea>

                <div class="invalid-feedback">
                    Champ Vide ou invalide
                </div>
            </div>

        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>

@endsection
