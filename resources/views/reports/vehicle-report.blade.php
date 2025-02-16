@extends('reports.report-layout')

@section('content')
<div class="mb-12">
  <div class="">
    <h2>Vehicle Information</h2>

    <div class="px-4">
      <table class="table mb-4 px-4">
        <tbody>
          <tr>
            <th>Status</th>
            <td>{{ ucfirst($vehicle->verified_status) }}</td>
          </tr>
          <tr>
            <th>Vehicle Type</th>
            <td>{{ ucfirst($vehicle->type) }}</td>
          </tr>
          <tr>
            <th>Plate Number</th>
            <td>{{ $vehicle->plate_number }}</td>
          </tr>
          <tr>
            <th>Make</th>
            <td>{{ $vehicle->make }}</td>
          </tr>
          <tr>
            <th>Series</th>
            <td>{{ $vehicle->model }}</td>
          </tr>
          <tr>
            <th>Year Model</th>
            <td>{{ $vehicle->year_model }}</td>
          </tr>
          <tr>
            <th>Color</th>
            <td>{{ $vehicle->color }}</td>
          </tr>
          <tr>
            <th>Engine Number</th>
            <td>{{ $vehicle->engine_number }}</td>
          </tr>
          <tr>
            <th>Chassis Number</th>
            <td>{{ $vehicle->chassis_number }}</td>
          </tr>
          <tr>
            <th>Do you own the vehicle?</th>
            <td>{{ $vehicle->own_vehicle ? 'Yes' : 'No' }}</td>
          </tr>
          @if(!$vehicle->own_vehicle)
            <tr>
              <th>Deed of Sale</th>
              <td>
                <img class="pnp-report" src="/storage/{{ $vehicle->deed_of_sale }}" />
              </td>
            </tr>
          @endif
          <tr>
            <th>OR</th>
            <td>
              @if ($vehicle->or)
                <img class="pnp-report" src="/storage/{{ $vehicle->or }}" />
              @endif
            </td>
          </tr>
          <tr>
            <th>CR</th>
            <td>
              @if ($vehicle->cr)
                <img class="pnp-report" src="/storage/{{ $vehicle->cr }}" />
              @endif
            </td>
          </tr>
          <tr>
            <th>Photos of Vehicle</th>
            <td>
              @if ($vehicle->photos)
                @foreach ($vehicle->photos as $photo)
                  <img class="pnp-report" src="/storage/{{ $photo->image }}" />
                @endforeach
              @endif
            </td>
          </tr>
          @if ($vehicle->code)
            <tr>
              <th>Code</th>
              <td>{{ $vehicle->code }}</td>
            </tr>
            <tr>
              <th>QR Code</th>
              <td>
                <div>{!! $vehicle->qr_code !!}</div>
              </td>
            </tr>
          @endif
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection