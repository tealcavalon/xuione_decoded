<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  3   JMP/42                    ?0        ?5                   ?0                  	;0	>>5
1  6   ECHO/40                   ?0        1:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
                    <div class="page-title-right">
                        ' ?0                  	;0
2  7   INCLUDE_OR_EVAL/73        ?0        2:'topbar.php'       ?0                  	;2
3  8   ECHO/40                   ?0        3:'					</div>
					<h4 class="page-title">Encoding Queue</h4>
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
									<th class="text-center">Position</th>
                                    <th>Stream</th>
									<th>Server</th>
									<th class="text-center">Status</th>
                                    <th class="text-center">Added</th>
									<th class="text-center">Actions</th>
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
4  9   GOTO/253                  ?0        ?33                  ?4                  	;0
5  11  INCLUDE_OR_EVAL/73        ?1        5:'session.php'      ?0                  	;2	<<0
6  12  INCLUDE_OR_EVAL/73        ?2        6:'functions.php'    ?0                  	;2
7  13  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'e6D500E19634D513'	;0
8  13  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
9  13  JMPZ/43                   ?0        $4                   ?11                 	;0	>>11
10 14  GOTO/253                  ?0        ?13                  ?9                  	;0
11 16  INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'E72F42A93714bA87'	;0	<<9
12 16  DO_FCALL_BY_NAME/131      ?4        ?0                   ?0                  	;0
13 18  GOTO/253                  ?0        ?14                  ?12                 	;0
14 20  ASSIGN/38                 ?5        16?0                 13:'Encoding Queue' 	;0
15 21  INCLUDE_OR_EVAL/73        ?6        14:'header.php'      ?0                  	;2
16 22  ECHO/40                   ?0        15:'<div class="wrapper"' ?0                  	;0
17 23  FETCH_IS/89               $8=       16:'_SERVER'         ?0                  	;0
18 23  ISSET_ISEMPTY_DIM_OBJ/115 #9=       $8                   17:'HTTP_X_REQUESTED_WITH'	;16777216
19 23  BOOL_NOT/13               #10=      #9                   ?0                  	;0
20 23  JMPZ_EX/46                #10=      #10                  ?28                 	;0	>>28
21 23  INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'strtolower'     	;1
22 23  FETCH_FUNC_ARG/92         $11=      20:'_SERVER'         ?0                  	;1
23 23  FETCH_DIM_FUNC_ARG/93     $12=      $11                  21:'HTTP_X_REQUESTED_WITH'	;1
24 23  SEND_VAR_EX/66            ?80       $12                  ?1                  	;0
25 23  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
26 23  IS_EQUAL/17               #14=      $13                  22:'xmlhttprequest' 	;0
27 23  BOOL/52                   #10=      #14                  ?0                  	;0
28 23  BOOL_NOT/13               #15=      #10                  ?0                  	;0	<<20
29 23  JMPZ/43                   ?0        #15                  ?31                 	;0	>>31
30 24  GOTO/253                  ?0        ?1                   ?23                 	;0
31 26  ECHO/40                   ?0        24:' style="display: none;"' ?0                  	;0	<<29
32 27  GOTO/253                  ?0        ?1                   ?25                 	;0
33 29  INCLUDE_OR_EVAL/73        ?15       26:'footer.php'      ?0                  	;2
34 30  NOP/0                     ?0        27:1                 ?0                  	;4294967295
*/

?>