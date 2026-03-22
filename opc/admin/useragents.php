<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?74                  ?0                  	;0	>>74
1   6    ECHO/40                   ?0        1:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
2   7    INCLUDE_OR_EVAL/73        ?0        2:'topbar.php'       ?0                  	;2
3   8    ECHO/40                   ?0        3:'					</div>
					<h4 class="page-title">Blocked User-Agents</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-12">
                ' ?0                  	;0
4   9    ISSET_ISEMPTY_CV/197      #5=       16?0                 ?0                  	;33554432
5   9    JMPZ_EX/46                #5=       #5                   ?9                  	;0	>>9
6   9    FETCH_CONSTANT/99         #6=       ?0                   4:'STATUS_SUCCESS'  	;16
7   9    IS_EQUAL/17               #7=       16?0                 #6                  	;0
8   9    BOOL/52                   #5=       #7                   ?0                  	;0
9   9    BOOL_NOT/13               #8=       #5                   ?0                  	;0	<<5
10  9    JMPZ/43                   ?0        #8                   ?12                 	;0	>>12
11  10   GOTO/253                  ?0        ?17                  ?7                  	;0
12  12   GOTO/253                  ?0        ?13                  ?8                  	;0	<<10
13  14   ECHO/40                   ?0        9:'                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    ' ?0                  	;0
14  15   FETCH_DIM_R/81            $9=       16?1                 10:'useragent_success'	;0
15  15   ECHO/40                   ?0        $9                   ?0                  	;0
16  16   ECHO/40                   ?0        11:'                </div>
                ' ?0                  	;0
17  18   ECHO/40                   ?0        12:'				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
						<table id="datatable" class="table table-striped table-borderless dt-responsive nowrap">
							<thead>
								<tr>
									<th class="text-center">ID</th>
									<th>User-Agent</th>
									<th class="text-center">Exact Match</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
								' ?0                  	;0
18  19   GOTO/253                  ?0        ?19                  ?13                 	;0
19  21   INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'eaC02E498611cE84'	;0
20  21   DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
21  21   FE_RESET_R/77             $11=      $10                  ?71                 	;0
22  21   FE_FETCH_R/78             ?0        $11                  16?2                	;71	>>71	<<70
23  22   NOP/0                     ?0        ?0                   ?0                  	;1
24  22   GOTO/253                  ?0        ?34                  ?16                 	;0
25  24   ECHO/40                   ?0        17:'"><button type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-pencil-outline"></i></button></a>
											<button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="api(' ?0                  	;0
26  25   INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'intval'         	;1
27  25   FETCH_DIM_FUNC_ARG/93     $12=      16?2                 20:'id'             	;1
28  25   SEND_VAR_EX/66            ?80       $12                  ?1                  	;0
29  25   DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
30  25   ECHO/40                   ?0        $13                  ?0                  	;0
31  26   ECHO/40                   ?0        21:', \'delete\');"><i class="mdi mdi-close"></i></button>
										</div>
									</td>
								</tr>
								' ?0                  	;0
32  28   NOP/0                     ?0        ?0                   ?0                  	;1
33  28   GOTO/253                  ?0        ?70                  ?22                 	;0
34  30   ECHO/40                   ?0        23:'								<tr id="ua-' ?0                  	;0
35  31   INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'intval'         	;1
36  31   FETCH_DIM_FUNC_ARG/93     $14=      16?2                 26:'id'             	;1
37  31   SEND_VAR_EX/66            ?80       $14                  ?1                  	;0
38  31   DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
39  31   ECHO/40                   ?0        $15                  ?0                  	;0
40  32   ECHO/40                   ?0        27:'">
									<td class="text-center">' ?0                  	;0
41  33   INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'intval'         	;1
42  33   FETCH_DIM_FUNC_ARG/93     $16=      16?2                 30:'id'             	;1
43  33   SEND_VAR_EX/66            ?80       $16                  ?1                  	;0
44  33   DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
45  33   ECHO/40                   ?0        $17                  ?0                  	;0
46  34   ECHO/40                   ?0        31:'</td>
									<td>' ?0                  	;0
47  35   NOP/0                     ?0        ?0                   ?0                  	;1
48  35   GOTO/253                  ?0        ?49                  ?32                 	;0
49  37   FETCH_DIM_R/81            $18=      16?2                 33:'user_agent'     	;0
50  37   ECHO/40                   ?0        $18                  ?0                  	;0
51  38   ECHO/40                   ?0        34:'</td>
									<td class="text-center">
										' ?0                  	;0
52  39   FETCH_DIM_R/81            $19=      16?2                 35:'exact_match'    	;0
53  39   JMPZ/43                   ?0        $19                  ?56                 	;0	>>56
54  40   NOP/0                     ?0        ?0                   ?0                  	;1
55  40   GOTO/253                  ?0        ?61                  ?36                 	;0
56  42   ECHO/40                   ?0        37:'										<i class="text-secondary fas fa-square"></i>
										' ?0                  	;0	<<53
57  43   NOP/0                     ?0        ?0                   ?0                  	;1
58  43   GOTO/253                  ?0        ?62                  ?38                 	;0
59  44   NOP/0                     ?0        ?0                   ?0                  	;1
60  44   GOTO/253                  ?0        ?61                  ?39                 	;0
61  47   ECHO/40                   ?0        40:'										<i class="text-success fas fa-square"></i>
										' ?0                  	;0
62  49   ECHO/40                   ?0        41:'									</td>
									<td class="text-center">
										<div class="btn-group">
											<a href="./useragent?id=' ?0                  	;0
63  50   INIT_FCALL_BY_NAME/59     ?0        ?0                   42:'intval'         	;1
64  50   FETCH_DIM_FUNC_ARG/93     $20=      16?2                 44:'id'             	;1
65  50   SEND_VAR_EX/66            ?80       $20                  ?1                  	;0
66  50   DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
67  50   ECHO/40                   ?0        $21                  ?0                  	;0
68  51   NOP/0                     ?0        ?0                   ?0                  	;1
69  51   GOTO/253                  ?0        ?25                  ?45                 	;0
70  52   JMP/42                    ?0        ?22                  ?0                  	;0	>>22
71  52   FE_FREE/127               ?0        $11                  ?0                  	;0	<<21
72  55   ECHO/40                   ?0        46:'							</tbody>
						</table>
					</div> 
				</div> 
			</div>
		</div>
	</div>
</div>
' ?0                  	;0
73  56   GOTO/253                  ?0        ?102                 ?47                 	;0
74  58   INCLUDE_OR_EVAL/73        ?18       48:'session.php'     ?0                  	;2	<<0
75  59   INCLUDE_OR_EVAL/73        ?19       49:'functions.php'   ?0                  	;2
76  60   INIT_FCALL_BY_NAME/59     ?0        ?0                   50:'e6D500E19634D513'	;0
77  60   DO_FCALL_BY_NAME/131      $24=      ?0                   ?0                  	;0
78  60   JMPZ/43                   ?0        $24                  ?80                 	;0	>>80
79  61   GOTO/253                  ?0        ?82                  ?52                 	;0
80  63   INIT_FCALL_BY_NAME/59     ?0        ?0                   53:'e72f42A93714ba87'	;0	<<78
81  63   DO_FCALL_BY_NAME/131      ?21       ?0                   ?0                  	;0
82  65   GOTO/253                  ?0        ?83                  ?55                 	;0
83  67   ASSIGN/38                 ?22       16?3                 56:'Blocked User-Agents'	;0
84  68   INCLUDE_OR_EVAL/73        ?23       57:'header.php'      ?0                  	;2
85  69   ECHO/40                   ?0        58:'<div class="wrapper boxed-layout-ext"' ?0                  	;0
86  70   FETCH_IS/89               $28=      59:'_SERVER'         ?0                  	;0
87  70   ISSET_ISEMPTY_DIM_OBJ/115 #29=      $28                  60:'HTTP_X_REQUESTED_WITH'	;16777216
88  70   BOOL_NOT/13               #30=      #29                  ?0                  	;0
89  70   JMPZ_EX/46                #30=      #30                  ?97                 	;0	>>97
90  70   INIT_FCALL_BY_NAME/59     ?0        ?0                   61:'strtolower'     	;1
91  70   FETCH_FUNC_ARG/92         $31=      63:'_SERVER'         ?0                  	;1
92  70   FETCH_DIM_FUNC_ARG/93     $32=      $31                  64:'HTTP_X_REQUESTED_WITH'	;1
93  70   SEND_VAR_EX/66            ?80       $32                  ?1                  	;0
94  70   DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
95  70   IS_EQUAL/17               #34=      $33                  65:'xmlhttprequest' 	;0
96  70   BOOL/52                   #30=      #34                  ?0                  	;0
97  70   BOOL_NOT/13               #35=      #30                  ?0                  	;0	<<89
98  70   JMPZ/43                   ?0        #35                  ?100                	;0	>>100
99  71   GOTO/253                  ?0        ?1                   ?66                 	;0
100 73   ECHO/40                   ?0        67:' style="display: none;"' ?0                  	;0	<<98
101 74   GOTO/253                  ?0        ?1                   ?68                 	;0
102 76   INCLUDE_OR_EVAL/73        ?32       69:'footer.php'      ?0                  	;2
103 77   NOP/0                     ?0        70:1                 ?0                  	;4294967295
*/

?>