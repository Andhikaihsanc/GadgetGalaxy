  @if ($message = Session::get('success'))
      <strong>{{ $message }}</strong>
  @endif

  @if ($message = Session::get('occupied'))
      <tr>
          <td class="flash">
              <i class="fas fa-exclamation-circle"></i> <strong>{{ $message }}</strong>
          </td>
      </tr>
  @endif

  @if ($message = Session::get('wrong'))
      <tr>
          <td class="flash">
              <i class="fas fa-exclamation-circle"></i> <strong>{{ $message }}</strong>
          </td>
      </tr>
  @endif
