<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  3   JMP/42                    ?0        ?13                  ?0                  	;0	>>13
1  5   ECHO/40                   ?0        1:'                    </div>
					<h4 class="page-title">Server Order</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
                ' ?0                  	;0
2  6   ISSET_ISEMPTY_CV/197      #5=       16?0                 ?0                  	;33554432
3  6   JMPZ_EX/46                #5=       #5                   ?7                  	;0	>>7
4  6   FETCH_CONSTANT/99         #6=       ?0                   2:'STATUS_SUCCESS'  	;16
5  6   IS_EQUAL/17               #7=       16?0                 #6                  	;0
6  6   BOOL/52                   #5=       #7                   ?0                  	;0
7  6   BOOL_NOT/13               #8=       #5                   ?0                  	;0	<<3
8  6   JMPZ/43                   ?0        #8                   ?10                 	;0	>>10
9  7   GOTO/253                  ?0        ?11                  ?5                  	;0
10 9   ECHO/40                   ?0        6:'				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Servers have been re-ordered.
				</div>
				' ?0                  	;0	<<8
11 11  ECHO/40                   ?0        7:'				<div class="card">
					<div class="card-body">
						<div id="basicwizard">
							<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
								<li class="nav-item">
									<a href="#servers" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
										<i class="mdi mdi-server mr-1"></i>
										<span class="d-none d-sm-inline">Servers</span>
									</a>
								</li>
							</ul>
							<div class="tab-content b-0 mb-0 pt-0">
								<div class="tab-pane" id="servers">
									<form action="#" method="POST" id="server_form">
										<input type="hidden" id="server_order" name="server_order" value="" />
										<div class="row">
											<div class="col-12">
												<p class="sub-header">
													To re-order a server, drag it up or down the list using the <i class="mdi mdi-view-sequential"></i> icon. Click Save Changes at the bottom once finished.<br/>Servers will be ordered as below on the dashboard, with offline servers moved to the end of the list automatically.
												</p>
												<div class="custom-dd dd" id="server_items">
													<ol class="dd-list">
														' ?0                  	;0
12 12  GOTO/253                  ?0        ?55                  ?8                  	;0
13 14  INCLUDE_OR_EVAL/73        ?4        9:'session.php'      ?0                  	;2	<<0
14 15  INCLUDE_OR_EVAL/73        ?5        10:'functions.php'   ?0                  	;2
15 16  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'e6D500E19634D513'	;0
16 16  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
17 16  JMPZ/43                   ?0        $11                  ?19                 	;0	>>19
18 17  GOTO/253                  ?0        ?21                  ?13                 	;0
19 19  INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'e72F42a93714Ba87'	;0	<<17
20 19  DO_FCALL_BY_NAME/131      ?7        ?0                   ?0                  	;0
21 21  GOTO/253                  ?0        ?40                  ?16                 	;0
22 23  FETCH_IS/89               $13=      17:'_SERVER'         ?0                  	;0
23 23  ISSET_ISEMPTY_DIM_OBJ/115 #14=      $13                  18:'HTTP_X_REQUESTED_WITH'	;16777216
24 23  BOOL_NOT/13               #15=      #14                  ?0                  	;0
25 23  JMPZ_EX/46                #15=      #15                  ?33                 	;0	>>33
26 23  INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'strtolower'     	;1
27 23  FETCH_FUNC_ARG/92         $16=      21:'_SERVER'         ?0                  	;1
28 23  FETCH_DIM_FUNC_ARG/93     $17=      $16                  22:'HTTP_X_REQUESTED_WITH'	;1
29 23  SEND_VAR_EX/66            ?80       $17                  ?1                  	;0
30 23  DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
31 23  IS_EQUAL/17               #19=      $18                  23:'xmlhttprequest' 	;0
32 23  BOOL/52                   #15=      #19                  ?0                  	;0
33 23  BOOL_NOT/13               #20=      #15                  ?0                  	;0	<<25
34 23  JMPZ/43                   ?0        #20                  ?36                 	;0	>>36
35 24  GOTO/253                  ?0        ?37                  ?24                 	;0
36 26  ECHO/40                   ?0        25:' style="display: none;"' ?0                  	;0	<<34
37 28  ECHO/40                   ?0        26:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
38 29  INCLUDE_OR_EVAL/73        ?16       27:'topbar.php'      ?0                  	;2
39 30  GOTO/253                  ?0        ?1                   ?28                 	;0
40 32  ASSIGN/38                 ?17       16?1                 16?2                	;0
41 33  INIT_FCALL_BY_NAME/59     ?0        ?0                   29:'array_multisort'	;3
42 33  INIT_FCALL_BY_NAME/59     ?0        ?0                   31:'array_column'   	;2
43 33  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
44 33  SEND_VAL_EX/116           ?96       33:'order'           ?2                  	;0
45 33  DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
46 33  SEND_VAR_NO_REF_EX/50     ?80       $23                  ?1                  	;0
47 33  FETCH_CONSTANT/99         #24=      ?0                   34:'SORT_ASC'       	;16
48 33  SEND_VAL_EX/116           ?96       #24                  ?2                  	;0
49 33  SEND_VAR_EX/66            ?112      16?1                 ?3                  	;0
50 33  DO_FCALL_BY_NAME/131      ?20       ?0                   ?0                  	;0
51 34  ASSIGN/38                 ?21       16?3                 37:'Server Order'   	;0
52 35  INCLUDE_OR_EVAL/73        ?22       38:'header.php'      ?0                  	;2
53 36  ECHO/40                   ?0        39:'<div class="wrapper boxed-layout"' ?0                  	;0
54 37  GOTO/253                  ?0        ?22                  ?40                 	;0
55 39  FE_RESET_R/77             $28=      16?1                 ?71                 	;0
56 39  FE_FETCH_R/78             ?0        $28                  16?4                	;71	>>71	<<70
57 40  ECHO/40                   ?0        41:'														<li class="dd-item dd3-item server-' ?0                  	;0
58 41  FETCH_DIM_R/81            $29=      16?4                 42:'id'             	;0
59 41  ECHO/40                   ?0        $29                  ?0                  	;0
60 42  ECHO/40                   ?0        43:'" data-id="'     ?0                  	;0
61 43  FETCH_DIM_R/81            $30=      16?4                 44:'id'             	;0
62 43  ECHO/40                   ?0        $30                  ?0                  	;0
63 44  ECHO/40                   ?0        45:'">
															<div class="dd-handle dd3-handle"></div>
															<div class="dd3-content">#' ?0                  	;0
64 45  FETCH_DIM_R/81            $31=      16?4                 46:'id'             	;0
65 45  ECHO/40                   ?0        $31                  ?0                  	;0
66 46  ECHO/40                   ?0        47:' - '             ?0                  	;0
67 47  FETCH_DIM_R/81            $32=      16?4                 48:'server_name'    	;0
68 47  ECHO/40                   ?0        $32                  ?0                  	;0
69 48  ECHO/40                   ?0        49:'																<span style="float:right;">
																</span>
															</div>
														</li>
														' ?0                  	;0
70 49  JMP/42                    ?0        ?56                  ?0                  	;0	>>56
71 49  FE_FREE/127               ?0        $28                  ?0                  	;0	<<55
72 52  ECHO/40                   ?0        50:'													</ol>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0 add-margin-top-20">
											<li class="list-inline-item float-right">
												<button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
											</li>
										</ul>
									</form>
								</div>
							</div>
						</div> 
					</div> 
				</div> 
			</div> 
		</div>
	</div>
</div>
' ?0                  	;0
73 53  GOTO/253                  ?0        ?74                  ?51                 	;0
74 55  INCLUDE_OR_EVAL/73        ?28       52:'footer.php'      ?0                  	;2
75 56  NOP/0                     ?0        53:1                 ?0                  	;4294967295
*/

?>