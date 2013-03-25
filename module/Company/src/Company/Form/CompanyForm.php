<?php
namespace Company\Form;
use Zend\Form\Form;

class CompanyForm extends Form
{
    public function __construct($name = Null )
    {
        // we want to ignore the name passed
        parent::__construct('company');
        $this->setAttribute('method', 'post');
        $this->add(array(
            'name' => 'id',
            'attributes' => array(
                'type'  => 'hidden',
            ),
        ));
        $this->add(array(
            'name' => 'title',
            'attributes' => array(
                'type'  => 'text',
                'placeholder' => 'title',
                'class' => 'input-xlarge'
              
            ),             
        ));
        $this->add(array(
            'name' => 'company',
            'attributes' => array(
                'type'  => 'text',
                'blaceholder' =>'your company name',
                'class' =>'input-xlarge'
            ),
            'options' => array(
                //'label' => 'Company name:',
            ),
        ));
        $this->add(array(
            'name' => 'message',
            'attributes' =>array(
		'type' => 'textarea',
                'blaceholder' => 'Discription your job',
                'class' => 'input-xlarge'
            ),
            'options' => array(
                 'required' => 'required',
                 'pattern'  => '^0[1-68]([-. ]?[0-9]{2}){4}$'
			),
		));
	$this->add(array(
             'name' => 'phoneNumber',
             'attributes' => array(
                'type' => 'tel',
                'blaceholder' => 'your phone number',
                'class' => 'input-xlarge'
             ),
		'options' => array(
		'required' => 'required',
                'pattern'  => '^0[1-68]([-. ]?[0-9]{2}){4}$',
             ),
	));
        $this->add(array(
             'name' => 'email',
             'attributes' => array(
                'type' => 'tel',
                 'blaceholder' => 'your e-mail',
                 'class' => 'input-xlarge'
             ),
		'options' => array(
		'required' => 'required',
                'pattern'  => '^0[1-68]([-. ]?[0-9]{2}){4}$',
             ),
	));
        $this->add(array(
             'name' => 'web',
             'attributes' => array(
                'type' => 'url',
                'blaceholder' => 'your web sit',
                'class' => 'input-xlarge' 
             ),
		'options' => array(
		'required' => 'required',
                'pattern'  => '^0[1-68]([-. ]?[0-9]{2}){4}$',
             ),
	));	
        $this->add(array(
            'name' => 'closeDate',
            'attributes' =>array(
		'type' => 'date',
                'blaceholder' => 'close date',
                'class' => 'input-xlarge' 
                
            ),
            'options' => array(
		'required' => 'required',
            ),
	));
        
        
                $this->add(array(
			'name' => 'imageFile',
			'attributes' =>array(
				'type' => 'file',
			),
			'options' => array(
				'label' => 'File Upload:',
				'required' => 'required',
                'pattern'  => '^0[1-68]([-. ]?[0-9]{2}){4}$'
			),
		));
                
                 
                  $this->add(array(
                    'type' => 'Zend\Form\Element\Select',
                    'name' => 'gender',
                    'options' => array(
                        'label' => 'Gender:',
                        'value_options' => array(
                            '1' => 'Select your gender',
                            '2' => 'Female',
                            '3' => 'Male',
                        ),
                    ),
                    'attributes' => array(
                        'value' => '1' //set selected to '1'
            ),
        ));
               		
        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'  => 'submit',
                'value' => 'Go',
                'id' => 'submitbutton',
                'class' => 'btn btn-success',
            ),
        ));
    }
} 
