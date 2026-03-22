<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  3   JMP/42                    ?0        ?40                  ?0                  	;0	>>40
1  5   ASSIGN/38                 ?0        16?0                 1:'Login Logs'      	;0
2  6   INCLUDE_OR_EVAL/73        ?1        2:'header.php'       ?0                  	;2
3  7   ECHO/40                   ?0        3:'<div class="wrapper"' ?0                  	;0
4  8   FETCH_IS/89               $4=       4:'_SERVER'          ?0                  	;0
5  8   ISSET_ISEMPTY_DIM_OBJ/115 #5=       $4                   5:'HTTP_X_REQUESTED_WITH'	;16777216
6  8   BOOL_NOT/13               #6=       #5                   ?0                  	;0
7  8   JMPZ_EX/46                #6=       #6                   ?15                 	;0	>>15
8  8   INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'strtolower'      	;1
9  8   FETCH_FUNC_ARG/92         $7=       8:'_SERVER'          ?0                  	;1
10 8   FETCH_DIM_FUNC_ARG/93     $8=       $7                   9:'HTTP_X_REQUESTED_WITH'	;1
11 8   SEND_VAR_EX/66            ?80       $8                   ?1                  	;0
12 8   DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
13 8   IS_EQUAL/17               #10=      $9                   10:'xmlhttprequest' 	;0
14 8   BOOL/52                   #6=       #10                  ?0                  	;0
15 8   BOOL_NOT/13               #11=      #6                   ?0                  	;0	<<7
16 8   JMPZ/43                   ?0        #11                  ?18                 	;0	>>18
17 9   GOTO/253                  ?0        ?34                  ?11                 	;0
18 11  ECHO/40                   ?0        12:' style="display: none;"' ?0                  	;0	<<16
19 12  GOTO/253                  ?0        ?34                  ?13                 	;0
20 14  ECHO/40                   ?0        14:'</th>
									<th class="text-center">' ?0                  	;0
21 15  FETCH_DIM_R/81            $12=      16?1                 15:'actions'        	;0
22 15  ECHO/40                   ?0        $12                  ?0                  	;0
23 16  ECHO/40                   ?0        16:'</th>
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
24 17  GOTO/253                  ?0        ?57                  ?17                 	;0
25 19  FETCH_DIM_R/81            $13=      16?1                 18:'username'       	;0
26 19  ECHO/40                   ?0        $13                  ?0                  	;0
27 20  ECHO/40                   ?0        19:'</th>
									<th class="text-center">' ?0                  	;0
28 21  FETCH_DIM_R/81            $14=      16?1                 20:'access_code'    	;0
29 21  ECHO/40                   ?0        $14                  ?0                  	;0
30 22  ECHO/40                   ?0        21:'</th>
                                    <th class="text-center">' ?0                  	;0
31 23  FETCH_DIM_R/81            $15=      16?1                 22:'ip'             	;0
32 23  ECHO/40                   ?0        $15                  ?0                  	;0
33 24  GOTO/253                  ?0        ?20                  ?23                 	;0
34 27  ECHO/40                   ?0        24:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
                    <div class="page-title-right">
                        ' ?0                  	;0
35 28  INCLUDE_OR_EVAL/73        ?14       25:'topbar.php'      ?0                  	;2
36 29  ECHO/40                   ?0        26:'					</div>
					<h4 class="page-title">Login Logs</h4>
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
37 30  FETCH_DIM_R/81            $17=      16?1                 27:'date'           	;0
38 30  ECHO/40                   ?0        $17                  ?0                  	;0
39 31  GOTO/253                  ?0        ?49                  ?28                 	;0
40 33  INCLUDE_OR_EVAL/73        ?16       29:'session.php'     ?0                  	;2	<<0
41 34  INCLUDE_OR_EVAL/73        ?17       30:'functions.php'   ?0                  	;2
42 35  INIT_FCALL_BY_NAME/59     ?0        ?0                   31:'E6d500E19634d513'	;0
43 35  DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
44 35  JMPZ/43                   ?0        $20                  ?46                 	;0	>>46
45 36  GOTO/253                  ?0        ?48                  ?33                 	;0
46 38  INIT_FCALL_BY_NAME/59     ?0        ?0                   34:'e72f42a93714Ba87'	;0	<<44
47 38  DO_FCALL_BY_NAME/131      ?19       ?0                   ?0                  	;0
48 40  GOTO/253                  ?0        ?1                   ?36                 	;0
49 42  ECHO/40                   ?0        37:'</th>
									<th class="text-center">' ?0                  	;0
50 43  FETCH_DIM_R/81            $22=      16?1                 38:'type'           	;0
51 43  ECHO/40                   ?0        $22                  ?0                  	;0
52 44  ECHO/40                   ?0        39:'</th>
                                    <th class="text-center">' ?0                  	;0
53 45  FETCH_DIM_R/81            $23=      16?1                 40:'status'         	;0
54 45  ECHO/40                   ?0        $23                  ?0                  	;0
55 46  ECHO/40                   ?0        41:'</th>
									<th class="text-center">' ?0                  	;0
56 47  GOTO/253                  ?0        ?25                  ?42                 	;0
57 49  INCLUDE_OR_EVAL/73        ?22       43:'footer.php'      ?0                  	;2
58 50  NOP/0                     ?0        44:1                 ?0                  	;4294967295
*/

?>