<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  3   JMP/42                    ?0        ?36                  ?0                  	;0	>>36
1  5   ECHO/40                   ?0        1:'</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
						<table id="datatable" class="table table-striped table-borderless dt-responsive nowrap">
							<thead>
								<tr>
									<th class="text-center">' ?0                  	;0
2  6   FETCH_DIM_R/81            $2=       16?0                 2:'date'            	;0
3  6   ECHO/40                   ?0        $2                   ?0                  	;0
4  7   ECHO/40                   ?0        3:'</th>
									<th class="text-center">' ?0                  	;0
5  8   FETCH_DIM_R/81            $3=       16?0                 4:'mac_address'     	;0
6  8   ECHO/40                   ?0        $3                   ?0                  	;0
7  9   ECHO/40                   ?0        5:'</th>
									<th>' ?0                  	;0
8  10  GOTO/253                  ?0        ?45                  ?6                  	;0
9  12  ECHO/40                   ?0        7:'</th>
								</tr>
							</thead>
							<tbody></tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
' ?0                  	;0
10 13  GOTO/253                  ?0        ?54                  ?8                  	;0
11 16  ECHO/40                   ?0        9:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
                    <div class="page-title-right">
                        ' ?0                  	;0
12 17  INCLUDE_OR_EVAL/73        ?2        10:'topbar.php'      ?0                  	;2
13 18  ECHO/40                   ?0        11:'					</div>
					<h4 class="page-title">' ?0                  	;0
14 19  FETCH_DIM_R/81            $5=       16?0                 12:'mag_events'     	;0
15 19  ECHO/40                   ?0        $5                   ?0                  	;0
16 20  GOTO/253                  ?0        ?1                   ?13                 	;0
17 22  ASSIGN/38                 ?4        16?1                 14:'MAG Events'     	;0
18 23  INCLUDE_OR_EVAL/73        ?5        15:'header.php'      ?0                  	;2
19 24  ECHO/40                   ?0        16:'<div class="wrapper boxed-layout-ext"' ?0                  	;0
20 25  FETCH_IS/89               $8=       17:'_SERVER'         ?0                  	;0
21 25  ISSET_ISEMPTY_DIM_OBJ/115 #9=       $8                   18:'HTTP_X_REQUESTED_WITH'	;16777216
22 25  BOOL_NOT/13               #10=      #9                   ?0                  	;0
23 25  JMPZ_EX/46                #10=      #10                  ?31                 	;0	>>31
24 25  INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'strtolower'     	;1
25 25  FETCH_FUNC_ARG/92         $11=      21:'_SERVER'         ?0                  	;1
26 25  FETCH_DIM_FUNC_ARG/93     $12=      $11                  22:'HTTP_X_REQUESTED_WITH'	;1
27 25  SEND_VAR_EX/66            ?80       $12                  ?1                  	;0
28 25  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
29 25  IS_EQUAL/17               #14=      $13                  23:'xmlhttprequest' 	;0
30 25  BOOL/52                   #10=      #14                  ?0                  	;0
31 25  BOOL_NOT/13               #15=      #10                  ?0                  	;0	<<23
32 25  JMPZ/43                   ?0        #15                  ?34                 	;0	>>34
33 26  GOTO/253                  ?0        ?11                  ?24                 	;0
34 28  ECHO/40                   ?0        25:' style="display: none;"' ?0                  	;0	<<32
35 29  GOTO/253                  ?0        ?11                  ?26                 	;0
36 31  INCLUDE_OR_EVAL/73        ?14       27:'session.php'     ?0                  	;2	<<0
37 32  INCLUDE_OR_EVAL/73        ?15       28:'functions.php'   ?0                  	;2
38 33  INIT_FCALL_BY_NAME/59     ?0        ?0                   29:'e6d500E19634d513'	;0
39 33  DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
40 33  JMPZ/43                   ?0        $18                  ?42                 	;0	>>42
41 34  GOTO/253                  ?0        ?44                  ?31                 	;0
42 36  INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'e72F42A93714bA87'	;0	<<40
43 36  DO_FCALL_BY_NAME/131      ?17       ?0                   ?0                  	;0
44 38  GOTO/253                  ?0        ?17                  ?34                 	;0
45 40  FETCH_DIM_R/81            $20=      16?0                 35:'event'          	;0
46 40  ECHO/40                   ?0        $20                  ?0                  	;0
47 41  ECHO/40                   ?0        36:'</th>
									<th>' ?0                  	;0
48 42  FETCH_DIM_R/81            $21=      16?0                 37:'message'        	;0
49 42  ECHO/40                   ?0        $21                  ?0                  	;0
50 43  ECHO/40                   ?0        38:'</th>
									<th class="text-center">' ?0                  	;0
51 44  FETCH_DIM_R/81            $22=      16?0                 39:'actions'        	;0
52 44  ECHO/40                   ?0        $22                  ?0                  	;0
53 45  GOTO/253                  ?0        ?9                   ?40                 	;0
54 47  INCLUDE_OR_EVAL/73        ?21       41:'footer.php'      ?0                  	;2
55 48  NOP/0                     ?0        42:1                 ?0                  	;4294967295
*/

?>