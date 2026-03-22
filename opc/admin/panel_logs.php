<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  3   JMP/42                    ?0        ?30                  ?0                  	;0	>>30
1  6   ECHO/40                   ?0        1:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
                    <div class="page-title-right">
                        ' ?0                  	;0
2  7   INCLUDE_OR_EVAL/73        ?0        2:'topbar.php'       ?0                  	;2
3  8   ECHO/40                   ?0        3:'					</div>
					<h4 class="page-title">Panel Errors</h4>
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
4  9   FETCH_DIM_R/81            $3=       16?0                 4:'date'            	;0
5  9   ECHO/40                   ?0        $3                   ?0                  	;0
6  10  GOTO/253                  ?0        ?39                  ?5                  	;0
7  12  ASSIGN/38                 ?2        16?1                 6:'Panel Errors'    	;0
8  13  INCLUDE_OR_EVAL/73        ?3        7:'header.php'       ?0                  	;2
9  14  ECHO/40                   ?0        8:'<div class="wrapper"' ?0                  	;0
10 15  FETCH_IS/89               $6=       9:'_SERVER'          ?0                  	;0
11 15  ISSET_ISEMPTY_DIM_OBJ/115 #7=       $6                   10:'HTTP_X_REQUESTED_WITH'	;16777216
12 15  BOOL_NOT/13               #8=       #7                   ?0                  	;0
13 15  JMPZ_EX/46                #8=       #8                   ?21                 	;0	>>21
14 15  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'strtolower'     	;1
15 15  FETCH_FUNC_ARG/92         $9=       13:'_SERVER'         ?0                  	;1
16 15  FETCH_DIM_FUNC_ARG/93     $10=      $9                   14:'HTTP_X_REQUESTED_WITH'	;1
17 15  SEND_VAR_EX/66            ?80       $10                  ?1                  	;0
18 15  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
19 15  IS_EQUAL/17               #12=      $11                  15:'xmlhttprequest' 	;0
20 15  BOOL/52                   #8=       #12                  ?0                  	;0
21 15  BOOL_NOT/13               #13=      #8                   ?0                  	;0	<<13
22 15  JMPZ/43                   ?0        #13                  ?24                 	;0	>>24
23 16  GOTO/253                  ?0        ?1                   ?16                 	;0
24 18  ECHO/40                   ?0        17:' style="display: none;"' ?0                  	;0	<<22
25 19  GOTO/253                  ?0        ?1                   ?18                 	;0
26 21  FETCH_DIM_R/81            $14=      16?0                 19:'error'          	;0
27 21  ECHO/40                   ?0        $14                  ?0                  	;0
28 22  ECHO/40                   ?0        20:'</th>
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
29 23  GOTO/253                  ?0        ?47                  ?21                 	;0
30 25  INCLUDE_OR_EVAL/73        ?13       22:'session.php'     ?0                  	;2	<<0
31 26  INCLUDE_OR_EVAL/73        ?14       23:'functions.php'   ?0                  	;2
32 27  INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'E6d500e19634d513'	;0
33 27  DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
34 27  JMPZ/43                   ?0        $17                  ?36                 	;0	>>36
35 28  GOTO/253                  ?0        ?38                  ?26                 	;0
36 30  INIT_FCALL_BY_NAME/59     ?0        ?0                   27:'e72F42A93714BA87'	;0	<<34
37 30  DO_FCALL_BY_NAME/131      ?16       ?0                   ?0                  	;0
38 32  GOTO/253                  ?0        ?7                   ?29                 	;0
39 34  ECHO/40                   ?0        30:'</th>
                                    <th class="text-center">' ?0                  	;0
40 35  FETCH_DIM_R/81            $19=      16?0                 31:'server'         	;0
41 35  ECHO/40                   ?0        $19                  ?0                  	;0
42 36  ECHO/40                   ?0        32:'</th>
									<th class="text-center">' ?0                  	;0
43 37  FETCH_DIM_R/81            $20=      16?0                 33:'type'           	;0
44 37  ECHO/40                   ?0        $20                  ?0                  	;0
45 38  ECHO/40                   ?0        34:'</th>
									<th>' ?0                  	;0
46 39  GOTO/253                  ?0        ?26                  ?35                 	;0
47 41  INCLUDE_OR_EVAL/73        ?19       36:'footer.php'      ?0                  	;2
48 42  NOP/0                     ?0        37:1                 ?0                  	;4294967295
*/

?>