<div class="col-md-4">
  <div class="progress-container progress-primary"><span class="progress-badge">{{ $skill['name'] }}</span>
    <div class="progress">
      <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="{{ $skill['value'] }}" aria-valuemin="0" aria-valuemax="10" style="width: {{ $skill['value']*10 }}%;"></div><span class="progress-value">{{ $skill['value'] }}</span>
    </div>
  </div>
</div>