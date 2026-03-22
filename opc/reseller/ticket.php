<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  3   JMP/42                    ?0        ?9                   ?0                  	;0	>>9
1  5   INCLUDE_OR_EVAL/73        ?0        1:'header.php'       ?0                  	;2
2  6   ECHO/40                   ?0        2:'<div class="wrapper boxed-layout">
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
3  7   INCLUDE_OR_EVAL/73        ?1        3:'topbar.php'       ?0                  	;2
4  8   ECHO/40                   ?0        4:'					</div>
					' ?0                  	;0
5  9   ISSET_ISEMPTY_CV/197      #4=       16?0                 ?0                  	;33554432
6  9   JMPZ/43                   ?0        #4                   ?8                  	;0	>>8
7  10  GOTO/253                  ?0        ?20                  ?5                  	;0
8  12  GOTO/253                  ?0        ?18                  ?6                  	;0	<<6
9  14  INCLUDE_OR_EVAL/73        ?3        7:'session.php'      ?0                  	;2	<<0
10 15  INCLUDE_OR_EVAL/73        ?4        8:'functions.php'    ?0                  	;2
11 16  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'BAf6E9eF7775b5A9'	;0
12 16  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
13 16  JMPZ/43                   ?0        $7                   ?15                 	;0	>>15
14 17  GOTO/253                  ?0        ?17                  ?11                 	;0
15 19  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'E72f42a93714BA87'	;0	<<13
16 19  DO_FCALL_BY_NAME/131      ?6        ?0                   ?0                  	;0
17 21  GOTO/253                  ?0        ?35                  ?14                 	;0
18 23  ECHO/40                   ?0        15:'					<h4 class="page-title">Create Ticket</h4>
					' ?0                  	;0
19 24  GOTO/253                  ?0        ?21                  ?16                 	;0
20 26  ECHO/40                   ?0        17:'					<h4 class="page-title">Ticket Response</h4>
					' ?0                  	;0
21 28  GOTO/253                  ?0        ?22                  ?18                 	;0
22 30  ECHO/40                   ?0        19:'				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<form action="#" method="POST" data-parsley-validate="">
							' ?0                  	;0
23 31  ISSET_ISEMPTY_CV/197      #9=       16?0                 ?0                  	;33554432
24 31  BOOL_NOT/13               #10=      #9                   ?0                  	;0
25 31  JMPZ/43                   ?0        #10                  ?27                 	;0	>>27
26 32  GOTO/253                  ?0        ?51                  ?20                 	;0
27 34  ECHO/40                   ?0        21:'							<input type="hidden" name="respond" value="' ?0                  	;0	<<25
28 35  INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'intval'         	;1
29 35  FETCH_DIM_FUNC_ARG/93     $11=      16?0                 24:'id'             	;1
30 35  SEND_VAR_EX/66            ?80       $11                  ?1                  	;0
31 35  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
32 35  ECHO/40                   ?0        $12                  ?0                  	;0
33 36  ECHO/40                   ?0        25:'" />
							'   ?0                  	;0
34 37  GOTO/253                  ?0        ?51                  ?26                 	;0
35 39  FETCH_STATIC_PROP_IS/176  $13=      27:'rRequest'        28:'XUI'            	;0
36 39  ISSET_ISEMPTY_DIM_OBJ/115 #14=      $13                  30:'id'             	;33554432
37 39  BOOL_NOT/13               #15=      #14                  ?0                  	;0
38 39  JMPZ/43                   ?0        #15                  ?40                 	;0	>>40
39 40  GOTO/253                  ?0        ?65                  ?31                 	;0
40 42  INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'DEf05ECDB21b0A50'	;1	<<38
41 42  FETCH_STATIC_PROP_FUNC_ARG/177 $16=      34:'rRequest'        35:'XUI'            	;1
42 42  FETCH_DIM_FUNC_ARG/93     $17=      $16                  37:'id'             	;1
43 42  SEND_VAR_EX/66            ?80       $17                  ?1                  	;0
44 42  DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
45 42  ASSIGN/38                 ?17       16?0                 $18                 	;0
46 43  JMPZ/43                   ?0        16?0                 ?48                 	;0	>>48
47 44  GOTO/253                  ?0        ?50                  ?38                 	;0
48 46  INIT_FCALL_BY_NAME/59     ?0        ?0                   39:'e72F42a93714bA87'	;0	<<46
49 46  DO_FCALL_BY_NAME/131      ?18       ?0                   ?0                  	;0
50 48  GOTO/253                  ?0        ?57                  ?41                 	;0
51 51  ECHO/40                   ?0        42:'							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#ticket-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">Details</span>
										</a>
									</li>
								</ul>
								<div class="tab-content b-0 mb-0 pt-0">
									<div class="tab-pane" id="ticket-details">
										<div class="row">
											<div class="col-12">
												' ?0                  	;0
52 52  ISSET_ISEMPTY_CV/197      #21=      16?0                 ?0                  	;33554432
53 52  JMPZ/43                   ?0        #21                  ?55                 	;0	>>55
54 53  GOTO/253                  ?0        ?56                  ?43                 	;0
55 55  ECHO/40                   ?0        44:'												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="title">Subject</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="title" name="title" value="" required data-parsley-trigger="change">
													</div>
												</div>
												' ?0                  	;0	<<53
56 57  GOTO/253                  ?0        ?67                  ?45                 	;0
57 59  INIT_FCALL_BY_NAME/59     ?0        ?0                   46:'e589a4bf54A2dAd1'	;2
58 59  SEND_VAL_EX/116           ?80       48:'user'            ?1                  	;0
59 59  FETCH_DIM_FUNC_ARG/93     $22=      16?0                 49:'member_id'      	;2
60 59  SEND_VAR_EX/66            ?96       $22                  ?2                  	;0
61 59  DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
62 59  JMPZ/43                   ?0        $23                  ?64                 	;0	>>64
63 60  GOTO/253                  ?0        ?65                  ?50                 	;0
64 62  EXIT/79                   ?0        ?0                   ?0                  	;0	<<62
65 65  ASSIGN/38                 ?22       16?1                 51:'Ticket'         	;0
66 66  GOTO/253                  ?0        ?1                   ?52                 	;0
67 68  ECHO/40                   ?0        53:'												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="message">Message</label>
													<div class="col-md-8">
														<textarea id="message" name="message" class="form-control" rows="3" placeholder="" required data-parsley-trigger="change"></textarea>
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="list-inline-item float-right">
												<input name="submit_ticket" type="submit" class="btn btn-primary" value="Create" />
											</li>
										</ul>
									</div>
								</div> 
							</div> 
						</form>
					</div>
				</div> 
			</div> 
		</div>
	</div>
</div>
' ?0                  	;0
68 69  GOTO/253                  ?0        ?69                  ?54                 	;0
69 71  INCLUDE_OR_EVAL/73        ?23       55:'footer.php'      ?0                  	;2
70 72  NOP/0                     ?0        56:1                 ?0                  	;4294967295
*/

?>