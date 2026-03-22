<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  3   JMP/42                    ?0        ?1                   ?0                  	;0	>>1
1  5   INCLUDE_OR_EVAL/73        ?0        1:'session.php'      ?0                  	;2	<<0
2  6   INCLUDE_OR_EVAL/73        ?1        2:'functions.php'    ?0                  	;2
3  7   INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'E6d500e19634d513'	;0
4  7   DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
5  7   JMPZ/43                   ?0        $4                   ?7                  	;0	>>7
6  8   GOTO/253                  ?0        ?9                   ?5                  	;0
7  10  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'E72F42a93714BA87'	;0	<<5
8  10  DO_FCALL_BY_NAME/131      ?3        ?0                   ?0                  	;0
9  12  GOTO/253                  ?0        ?31                  ?8                  	;0
10 15  ECHO/40                   ?0        9:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
11 16  INCLUDE_OR_EVAL/73        ?4        10:'topbar.php'      ?0                  	;2
12 17  ECHO/40                   ?0        11:'					</div>
					<h4 class="page-title">' ?0                  	;0
13 18  FETCH_DIM_R/81            $7=       16?0                 12:'block_ip'       	;0
14 18  ECHO/40                   ?0        $7                   ?0                  	;0
15 19  GOTO/253                  ?0        ?23                  ?13                 	;0
16 21  FETCH_DIM_R/81            $8=       16?0                 14:'notes'          	;0
17 21  ECHO/40                   ?0        $8                   ?0                  	;0
18 22  ECHO/40                   ?0        15:'</label>
													<div class="col-md-8">
														<textarea class="form-control" id="notes" name="notes" required data-parsley-trigger="change"></textarea>
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="list-inline-item float-right">
												<input name="submit_ip" type="submit" class="btn btn-primary" value="' ?0                  	;0
19 23  FETCH_DIM_R/81            $9=       16?0                 16:'block'          	;0
20 23  ECHO/40                   ?0        $9                   ?0                  	;0
21 24  ECHO/40                   ?0        17:'" />
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
22 25  GOTO/253                  ?0        ?50                  ?18                 	;0
23 27  ECHO/40                   ?0        19:'</h4>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<form action="#" method="POST" data-parsley-validate="">
							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#ip-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">' ?0                  	;0
24 28  FETCH_DIM_R/81            $10=      16?0                 20:'details'        	;0
25 28  ECHO/40                   ?0        $10                  ?0                  	;0
26 29  ECHO/40                   ?0        21:'</span>
										</a>
									</li>
								</ul>
								<div class="tab-content b-0 mb-0 pt-0">
									<div class="tab-pane" id="ip-details">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="ip">' ?0                  	;0
27 30  FETCH_DIM_R/81            $11=      16?0                 22:'ip_address'     	;0
28 30  ECHO/40                   ?0        $11                  ?0                  	;0
29 31  ECHO/40                   ?0        23:'</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="ip" name="ip" value="" required data-parsley-trigger="change">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="notes">' ?0                  	;0
30 32  GOTO/253                  ?0        ?16                  ?24                 	;0
31 34  ASSIGN/38                 ?10       16?1                 25:'Blocked IP'     	;0
32 35  INCLUDE_OR_EVAL/73        ?11       26:'header.php'      ?0                  	;2
33 36  ECHO/40                   ?0        27:'<div class="wrapper boxed-layout"' ?0                  	;0
34 37  FETCH_IS/89               $14=      28:'_SERVER'         ?0                  	;0
35 37  ISSET_ISEMPTY_DIM_OBJ/115 #15=      $14                  29:'HTTP_X_REQUESTED_WITH'	;16777216
36 37  BOOL_NOT/13               #16=      #15                  ?0                  	;0
37 37  JMPZ_EX/46                #16=      #16                  ?45                 	;0	>>45
38 37  INIT_FCALL_BY_NAME/59     ?0        ?0                   30:'strtolower'     	;1
39 37  FETCH_FUNC_ARG/92         $17=      32:'_SERVER'         ?0                  	;1
40 37  FETCH_DIM_FUNC_ARG/93     $18=      $17                  33:'HTTP_X_REQUESTED_WITH'	;1
41 37  SEND_VAR_EX/66            ?80       $18                  ?1                  	;0
42 37  DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
43 37  IS_EQUAL/17               #20=      $19                  34:'xmlhttprequest' 	;0
44 37  BOOL/52                   #16=      #20                  ?0                  	;0
45 37  BOOL_NOT/13               #21=      #16                  ?0                  	;0	<<37
46 37  JMPZ/43                   ?0        #21                  ?48                 	;0	>>48
47 38  GOTO/253                  ?0        ?10                  ?35                 	;0
48 40  ECHO/40                   ?0        36:' style="display: none;"' ?0                  	;0	<<46
49 41  GOTO/253                  ?0        ?10                  ?37                 	;0
50 43  INCLUDE_OR_EVAL/73        ?20       38:'footer.php'      ?0                  	;2
51 44  NOP/0                     ?0        39:1                 ?0                  	;4294967295
*/

?>