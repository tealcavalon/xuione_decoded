<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  3   JMP/42                    ?0        ?78                  ?0                  	;0	>>78
1  6   ECHO/40                   ?0        1:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
2  7   INCLUDE_OR_EVAL/73        ?0        2:'topbar.php'       ?0                  	;2
3  8   ECHO/40                   ?0        3:'					</div>
					<h4 class="page-title">Blocked ISP\'s</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-12">
				' ?0                  	;0
4  9   ISSET_ISEMPTY_CV/197      #4=       16?0                 ?0                  	;33554432
5  9   JMPZ_EX/46                #4=       #4                   ?9                  	;0	>>9
6  9   FETCH_CONSTANT/99         #5=       ?0                   4:'STATUS_SUCCESS'  	;16
7  9   IS_EQUAL/17               #6=       16?0                 #5                  	;0
8  9   BOOL/52                   #4=       #6                   ?0                  	;0
9  9   BOOL_NOT/13               #7=       #4                   ?0                  	;0	<<5
10 9   JMPZ/43                   ?0        #7                   ?12                 	;0	>>12
11 10  GOTO/253                  ?0        ?16                  ?7                  	;0
12 12  GOTO/253                  ?0        ?15                  ?8                  	;0	<<10
13 14  ECHO/40                   ?0        9:'							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
' ?0                  	;0
14 15  GOTO/253                  ?0        ?87                  ?10                 	;0
15 17  ECHO/40                   ?0        11:'				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					ISP has been blocked on all servers.
				</div>
				' ?0                  	;0
16 19  ECHO/40                   ?0        12:'				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
						<table id="datatable" class="table table-striped table-borderless dt-responsive nowrap">
							<thead>
								<tr>
									<th class="text-center">ID</th>
									<th>ISP Name</th>
									<th class="text-center">Blocked</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
								' ?0                  	;0
17 20  INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'e87Ade454d6C69d1'	;0
18 20  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
19 20  FE_RESET_R/77             $9=       $8                   ?57                 	;0
20 20  FE_FETCH_R/78             ?0        $9                   16?1                	;57	>>57	<<56
21 21  NOP/0                     ?0        ?0                   ?0                  	;1
22 21  GOTO/253                  ?0        ?35                  ?15                 	;0
23 23  FETCH_DIM_R/81            $10=      16?1                 16:'isp'            	;0
24 23  ECHO/40                   ?0        $10                  ?0                  	;0
25 24  ECHO/40                   ?0        17:'</td>
									<td class="text-center">
										' ?0                  	;0
26 25  FETCH_DIM_R/81            $11=      16?1                 18:'blocked'        	;0
27 25  JMPZ/43                   ?0        $11                  ?30                 	;0	>>30
28 26  NOP/0                     ?0        ?0                   ?0                  	;1
29 26  GOTO/253                  ?0        ?44                  ?19                 	;0
30 28  ECHO/40                   ?0        20:'										<i class="text-secondary fas fa-square"></i>
										' ?0                  	;0	<<27
31 29  NOP/0                     ?0        ?0                   ?0                  	;1
32 29  GOTO/253                  ?0        ?45                  ?21                 	;0
33 30  NOP/0                     ?0        ?0                   ?0                  	;1
34 30  GOTO/253                  ?0        ?44                  ?22                 	;0
35 32  ECHO/40                   ?0        23:'								<tr id="isp-' ?0                  	;0
36 33  FETCH_DIM_R/81            $12=      16?1                 24:'id'             	;0
37 33  ECHO/40                   ?0        $12                  ?0                  	;0
38 34  ECHO/40                   ?0        25:'">
									<td class="text-center">' ?0                  	;0
39 35  FETCH_DIM_R/81            $13=      16?1                 26:'id'             	;0
40 35  ECHO/40                   ?0        $13                  ?0                  	;0
41 36  ECHO/40                   ?0        27:'</td>
									<td>' ?0                  	;0
42 37  NOP/0                     ?0        ?0                   ?0                  	;1
43 37  GOTO/253                  ?0        ?23                  ?28                 	;0
44 40  ECHO/40                   ?0        29:'										<i class="text-success fas fa-square"></i>
										' ?0                  	;0
45 42  ECHO/40                   ?0        30:'									</td>
									<td class="text-center">
										<div class="btn-group">
											<a href="./isp?id=' ?0                  	;0
46 43  FETCH_DIM_R/81            $14=      16?1                 31:'id'             	;0
47 43  ECHO/40                   ?0        $14                  ?0                  	;0
48 44  NOP/0                     ?0        ?0                   ?0                  	;1
49 44  GOTO/253                  ?0        ?50                  ?32                 	;0
50 46  ECHO/40                   ?0        33:'"><button type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-pencil-outline"></i></button></a>
											<button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="api(' ?0                  	;0
51 47  FETCH_DIM_R/81            $15=      16?1                 34:'id'             	;0
52 47  ECHO/40                   ?0        $15                  ?0                  	;0
53 48  ECHO/40                   ?0        35:', \'delete\');"><i class="mdi mdi-close"></i></button>
										</div>
									</td>
								</tr>
								' ?0                  	;0
54 50  NOP/0                     ?0        ?0                   ?0                  	;1
55 50  GOTO/253                  ?0        ?56                  ?36                 	;0
56 51  JMP/42                    ?0        ?20                  ?0                  	;0	>>20
57 51  FE_FREE/127               ?0        $9                   ?0                  	;0	<<19
58 54  GOTO/253                  ?0        ?13                  ?37                 	;0
59 56  ASSIGN/38                 ?13       16?2                 38:'Blocked ISP\'s' 	;0
60 57  INCLUDE_OR_EVAL/73        ?14       39:'header.php'      ?0                  	;2
61 58  ECHO/40                   ?0        40:'<div class="wrapper boxed-layout-ext"' ?0                  	;0
62 59  FETCH_IS/89               $18=      41:'_SERVER'         ?0                  	;0
63 59  ISSET_ISEMPTY_DIM_OBJ/115 #19=      $18                  42:'HTTP_X_REQUESTED_WITH'	;16777216
64 59  BOOL_NOT/13               #20=      #19                  ?0                  	;0
65 59  JMPZ_EX/46                #20=      #20                  ?73                 	;0	>>73
66 59  INIT_FCALL_BY_NAME/59     ?0        ?0                   43:'strtolower'     	;1
67 59  FETCH_FUNC_ARG/92         $21=      45:'_SERVER'         ?0                  	;1
68 59  FETCH_DIM_FUNC_ARG/93     $22=      $21                  46:'HTTP_X_REQUESTED_WITH'	;1
69 59  SEND_VAR_EX/66            ?80       $22                  ?1                  	;0
70 59  DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
71 59  IS_EQUAL/17               #24=      $23                  47:'xmlhttprequest' 	;0
72 59  BOOL/52                   #20=      #24                  ?0                  	;0
73 59  BOOL_NOT/13               #25=      #20                  ?0                  	;0	<<65
74 59  JMPZ/43                   ?0        #25                  ?76                 	;0	>>76
75 60  GOTO/253                  ?0        ?1                   ?48                 	;0
76 62  ECHO/40                   ?0        49:' style="display: none;"' ?0                  	;0	<<74
77 63  GOTO/253                  ?0        ?1                   ?50                 	;0
78 65  INCLUDE_OR_EVAL/73        ?23       51:'session.php'     ?0                  	;2	<<0
79 66  INCLUDE_OR_EVAL/73        ?24       52:'functions.php'   ?0                  	;2
80 67  INIT_FCALL_BY_NAME/59     ?0        ?0                   53:'E6D500e19634D513'	;0
81 67  DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
82 67  JMPZ/43                   ?0        $28                  ?84                 	;0	>>84
83 68  GOTO/253                  ?0        ?86                  ?55                 	;0
84 70  INIT_FCALL_BY_NAME/59     ?0        ?0                   56:'e72f42a93714Ba87'	;0	<<82
85 70  DO_FCALL_BY_NAME/131      ?26       ?0                   ?0                  	;0
86 72  GOTO/253                  ?0        ?59                  ?58                 	;0
87 74  INCLUDE_OR_EVAL/73        ?27       59:'footer.php'      ?0                  	;2
88 75  NOP/0                     ?0        60:1                 ?0                  	;4294967295
*/

?>