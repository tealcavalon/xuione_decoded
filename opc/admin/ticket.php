<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  3   JMP/42                    ?0        ?41                  ?0                  	;0	>>41
1  5   INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'dEf05ecDB21b0a50'	;1
2  5   FETCH_STATIC_PROP_FUNC_ARG/177 $2=       3:'rRequest'         4:'XUI'             	;1
3  5   FETCH_DIM_FUNC_ARG/93     $3=       $2                   6:'id'              	;1
4  5   SEND_VAR_EX/66            ?80       $3                   ?1                  	;0
5  5   DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
6  5   ASSIGN/38                 ?3        16?0                 $4                  	;0
7  6   JMPZ/43                   ?0        16?0                 ?9                  	;0	>>9
8  7   GOTO/253                  ?0        ?11                  ?7                  	;0
9  9   INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'e72f42a93714bA87'	;0	<<7
10 9   DO_FCALL_BY_NAME/131      ?4        ?0                   ?0                  	;0
11 11  ASSIGN/38                 ?5        16?1                 10:'Ticket'         	;0
12 12  GOTO/253                  ?0        ?13                  ?11                 	;0
13 14  INCLUDE_OR_EVAL/73        ?6        12:'header.php'      ?0                  	;2
14 15  ECHO/40                   ?0        13:'<div class="wrapper boxed-layout"' ?0                  	;0
15 16  FETCH_IS/89               $9=       14:'_SERVER'         ?0                  	;0
16 16  ISSET_ISEMPTY_DIM_OBJ/115 #10=      $9                   15:'HTTP_X_REQUESTED_WITH'	;16777216
17 16  BOOL_NOT/13               #11=      #10                  ?0                  	;0
18 16  JMPZ_EX/46                #11=      #11                  ?26                 	;0	>>26
19 16  INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'strtolower'     	;1
20 16  FETCH_FUNC_ARG/92         $12=      18:'_SERVER'         ?0                  	;1
21 16  FETCH_DIM_FUNC_ARG/93     $13=      $12                  19:'HTTP_X_REQUESTED_WITH'	;1
22 16  SEND_VAR_EX/66            ?80       $13                  ?1                  	;0
23 16  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
24 16  IS_EQUAL/17               #15=      $14                  20:'xmlhttprequest' 	;0
25 16  BOOL/52                   #11=      #15                  ?0                  	;0
26 16  BOOL_NOT/13               #16=      #11                  ?0                  	;0	<<18
27 16  JMPZ/43                   ?0        #16                  ?29                 	;0	>>29
28 17  GOTO/253                  ?0        ?30                  ?21                 	;0
29 19  ECHO/40                   ?0        22:' style="display: none;"' ?0                  	;0	<<27
30 21  GOTO/253                  ?0        ?31                  ?23                 	;0
31 23  ECHO/40                   ?0        24:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
32 24  INCLUDE_OR_EVAL/73        ?15       25:'topbar.php'      ?0                  	;2
33 25  ECHO/40                   ?0        26:'					</div>
					<h4 class="page-title">Ticket Response</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<form action="#" method="POST" data-parsley-validate="">
							<input type="hidden" name="respond" value="' ?0                  	;0
34 26  INIT_FCALL_BY_NAME/59     ?0        ?0                   27:'intval'         	;1
35 26  FETCH_DIM_FUNC_ARG/93     $18=      16?0                 29:'id'             	;1
36 26  SEND_VAR_EX/66            ?80       $18                  ?1                  	;0
37 26  DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
38 26  ECHO/40                   ?0        $19                  ?0                  	;0
39 27  ECHO/40                   ?0        30:'" />
							<div id="basicwizard">
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
												<div class="form-group row mb-4">
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
40 28  GOTO/253                  ?0        ?50                  ?31                 	;0
41 30  INCLUDE_OR_EVAL/73        ?18       32:'session.php'     ?0                  	;2	<<0
42 31  INCLUDE_OR_EVAL/73        ?19       33:'functions.php'   ?0                  	;2
43 32  INIT_FCALL_BY_NAME/59     ?0        ?0                   34:'E6d500E19634D513'	;0
44 32  DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
45 32  JMPZ/43                   ?0        $22                  ?47                 	;0	>>47
46 33  GOTO/253                  ?0        ?49                  ?36                 	;0
47 35  INIT_FCALL_BY_NAME/59     ?0        ?0                   37:'E72F42a93714Ba87'	;0	<<45
48 35  DO_FCALL_BY_NAME/131      ?21       ?0                   ?0                  	;0
49 37  GOTO/253                  ?0        ?1                   ?39                 	;0
50 39  INCLUDE_OR_EVAL/73        ?22       40:'footer.php'      ?0                  	;2
51 40  NOP/0                     ?0        41:1                 ?0                  	;4294967295
*/

?>