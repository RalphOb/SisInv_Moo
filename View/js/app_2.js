
//we can set animation delay as following in ms (default 1000)
ProgressBar.singleStepAnimation = 10000;
ProgressBar.init(
  [ 'Received Responses',
    'Negotiation Done',
    'Hired Professional',
    'Casi llegas',
    'Final de la Ruta'
  ],
  'Final de la Ruta',
  'progress-bar-wrapper' // created this optional parameter for container name (otherwise default container created)
);
