{{ Form::label('sport', 'Sport', array('class' => $className)) }}
{{ Form::select('sport', 
	$showGeneral ?
['Ball Hockey' => 'Ball Hockey',
'Basketball' => 'Basketball',
'Baseball' => 'Baseball',
'Dodgeball' => 'Dodgeball',
'Fast-Pitch' => 'Fast-Pitch',
'Flag Football' => 'Flag Football',
'Hockey' => 'Hockey',
'Slo-Pitch' => 'Slo-Pitch',
'Soccer' => 'Soccer', 
'Ultimate Frisbee' => 'Ultimate Frisbee',
'Volleyball' => 'Volleyball',
'General' => 'General']
:
['Ball Hockey' => 'Ball Hockey',
'Basketball' => 'Basketball',
'Baseball' => 'Baseball',
'Dodgeball' => 'Dodgeball',
'Fast-Pitch' => 'Fast-Pitch',
'Flag Football' => 'Flag Football',
'Hockey' => 'Hockey',
'Slo-Pitch' => 'Slo-Pitch',
'Soccer' => 'Soccer', 
'Ultimate Frisbee' => 'Ultimate Frisbee',
'Volleyball' => 'Volleyball'],
$sport, ['placeholder' => '', 'class' => 'form-control ' . $className, 'required' => '']) }}