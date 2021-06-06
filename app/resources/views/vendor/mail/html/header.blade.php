<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://user-images.githubusercontent.com/76773842/120919270-a1de8700-c6f3-11eb-85b2-a6609f117a02.png" class="logo" alt="i Lite Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
