<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', function () {


$courses=[
			['title'=>"Introduction to C Programming – 24 Hours",
				"content"=>[
							["1Introduction to C programming;1Code building process;1Standard I/O library;1Using printf function;1Hello world program;1Basic Data types in C;1Variables in C;1Using scanf function","3 Hours"],
							["1C operators:;2Arithmetic operators;3Unary;4Postfix ( ++ , -- );4Prefix  ( ++ , -- );3Binary ( + , - , * , / , % );2Assignment ( = , *= , += , -= , /= );2Relational ( > , < , >= , <= , == , != );2Logical ( && , || , ! );2Bit wise ( & , | , ^ , << , >> , ~ );2Ternary ( ?:);2Operator \"sizeof\" ;1Operator precedence;1If statement;1Switch statement;1Exercises","3 Hours"],
							["1Loops;2About Loops;2\"while\" Loop ;2\"for\" Loop ;2\"do..while\" Loop ;2\"break\" and \"continue\" ;2Special Loops ;2Exercises;1Arrays;2About Arrays ;2Strings Revisited;2Multi-dimensional arrays ;2Array initialization ;2Exercises","3 Hours"],
							["1Strings (Array of characters);1Using C string library;1Array of strings (2D array);1Using cprintf function;1ASCII codes ;1Building Employee management system","3 Hours"],
							["1Functions;2About Functions;2Defining and calling functions;2Function parameters;2Functions that Return a Value ;2Function prototypes ;2Exercises;1Structures;2Defining and Using a Structure;2Structures and Functions;2The \"typedef\" Keyword;2Exercises;1Enumeration in C;1Union in C;1Bit field","3 Hours"],
							["1Basic pointers;2Introduction to Basic Pointers;2Understanding Pointers;2Pointer Syntax;2Pointer Syntax Examples;2A Common Pointer Confusion;2Coding with Pointers;2Pointers as Function Parameters;2Pointers to Structures;2Exercises;2Array of pointers;2Array Vs pointer","3 Hours"],
							["1Dynamic memory;2About Dynamic Memory;2Understanding Memory;2The \"malloc\" Function;2\"malloc\" Examples;2The \"free\" Function;2Other Dynamic Memory Features;2Exercises","3 Hours"],
							["1C preprocessor directives;1C Modifiers;1Exercises","3 Hours"]
						]
			],
			['title'=>"PIC Microcontroller Step by Step – 24 Hours",
				"content"=>[
							["1Introduction to Embedded Systems;1PIC Microcontroller Environment setup;1Flashing LED;1Interfacing Buzzer","3 Hours"],
							["1Push Button Interfacing;17-Segment  display Interfacing;1Stop watch mini project","3 Hours"], 
							["1Interfacing DC motor;1Using Relays;1H-Bridge L293D;1Interfacing Char LCD","3 Hours"],
							["1Analog to digital converter – ADC;1Temperature sensor LM35 Interfacing;1Fire alarm system mini project","3 Hours"],
							["1External Interrupts;1Keypad Interfacing;1Safe Box mini project","3 Hours"], 
							["1PIC Timers;1Pulse width modulation – PWM;1Controlling LED Intensity;1Controlling Motor Speed","3 Hours"],
							["1UART;1Interfacing your circuit with PC","3 Hours"],
							["1Final Project","3 Hours"]
						]
			],
			['title'=>"Display your LIFE – 42 Hours",
				"content"=>[
							["1Review on Embedded Systems concepts","2 Hours"],
							["1Review on Embedded Systems concepts, CONT","2 Hours"],
							["1Review on C programming","3 Hours"],
							["1Review on C programming, CONT","2.5 Hours"],
							["1Review on C programming, CONT","2.5 Hours"],
							["1Segment Displays","2 Hours"],
							["1LED Matrix","4 Hours"],
							["1Multiplexing LED matrix displays","4 Hours"],
							["1Character display","4 Hours"],
							["1Mono-color Graphical LCD","4 Hours"],
							["1Touch panels","4 Hours"],
							["1Colored TFT","8 Hours"]
						]
			],
			['title'=>"Embedded Wireless Communications World – 40Hours",
				"content"=>[
							["1Infra Red – IR","4 Hours"],
							["1Infra Red – IR, CONT.","4 Hours"],
							["1Radio Frequency – RF","4 Hours"],
							["1Bluetooth","4 Hours"],
							["1Zigbee","4 Hours"],
							["1Near Field Communications – NFC","4 Hours"],
							["1Radio Frequency Identification – RFID","4 Hours"],
							["1Global System for Mobile Communications – GSM","4 Hours"],
							["1Wi-Fi","4 Hours"],
							["1Wi-Fi, CONT.","4 Hours"]
						]
			],
			['title'=>"Interfacing Technology Protocols – 24 Hours",
				"content"=>[
							["1Parallel communication","3 Hours"],
							["1Universal Asynchronous Receiver/Transmitter - UART","4 Hours"],
							["1Serial Peripheral Interface – SPI","4 Hours"],
							["1Inter-Integrated Circuit – I2C","4 Hours"],
							["1Local Interconnect Network – LIN","3 Hours"],
							["1Controller Area Network – CAN","3 Hours"],
							["1Universal Serial Bus - USB","3 Hours"]
						]
			],
			['title'=>"Motors, from ZERO to HERO – 40 Hours",
				"content"=>[
							["1Dealing with Power transistors and Darlington pair.","4 Hours"],
							["1Dealing with relays.","2 Hours"],
							["1Brushed DC motor interfacing.","2 Hours"],
							["1Building H bridge circuit.","2 Hours"],
							["1Control DC motor using PWM.","2 Hours"],
							["1Input capture unit.","2 Hours"],
							["1Rotary encoder (Control DC motor angle).","4 Hours"],
							["1Stepper motor interfacing.","4 Hours"],
							["1Servo motor interfacing.","4 Hours"],
							["1Brushless DC motor interfacing.","4 Hours"],
							["1AC motor interfacing.","2 Hours"],
							["1Mini-robot project.","4 Hours"],
							["1Mini-robot project, CONT.","4 Hours"]
						]
			]

		];
     return view('welcome',['courses'=>$courses]);
});
