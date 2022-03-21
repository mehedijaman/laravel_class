@extends('layouts.master')
@section('content')
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Income</h1>
    </div>

    {{ Form::open(['url' => 'income/store','class' => 'form-horizontal']) }}
      <div class="form-group">
        <label for="Category" class="control-label col-md-4">Income Category</label>
        <div class="col-md-4">
          <select name="CategoryID" id="CategoryID" class="form-control">
            <option value="">Select Category</option>
            @foreach($IncomeCategories as $Category)
            <option value="{{ $Category->id }}">{{ $Category->Name }}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="Amount" class="control-label col-md-4">Amount</label>
        <div class="col-md-4">
          <input type="number" class="form-control" name="Amount">
        </div>
      </div>

      <div class="form-group">
        <label for="Description" class="control-label col-md-4">Description</label>
        <div class="col-md-4">
          <input type="text" class="form-control" name="Description">
        </div>
      </div>

      <!-- <div class="form-group">
        <label for="IncomeDate" class="control-label col-md-4">IncomeDate</label>
        <div class="col-md-4">
          <input type="date" class="form-control" name="IncomeDate">
        </div>
      </div> -->

      <div class="form-group">
        <input type="submit" name="submit" value="Add Income" class="btn btn-primary">
      </div>
    {{ Form::close() }}

    <table class="table table-responsive table-bordered table-stripped">
      <thead>
        <tr>
          <th>Category</th>
          <th>Date</th>
          <th>Description</th>
          <th>Amount</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($Incomes as $Income)
        <tr>
          <td>{{ $Income->CategoryName }}</td>
          <td>{{ $Income->IncomeDate }}</td>
          <td>{{ $Income->Description }}</td>
          <td>{{ $Income->Amount }}</td>
          <td>
            <a href="" class="btn btn-warning">Edit</a>
            <a href="" class="btn btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </main>
@endsection