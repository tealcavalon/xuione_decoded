<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  3   JMP/42                    ?0        ?1                   ?0                  	;0	>>1
1  5   INCLUDE_OR_EVAL/73        ?0        1:'session.php'      ?0                  	;2	<<0
2  6   INCLUDE_OR_EVAL/73        ?1        2:'functions.php'    ?0                  	;2
3  7   INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'e6d500e19634d513'	;0
4  7   DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
5  7   JMPZ/43                   ?0        $6                   ?7                  	;0	>>7
6  8   GOTO/253                  ?0        ?9                   ?5                  	;0
7  10  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'e72F42A93714ba87'	;0	<<5
8  10  DO_FCALL_BY_NAME/131      ?3        ?0                   ?0                  	;0
9  12  GOTO/253                  ?0        ?74                  ?8                  	;0
10 14  FETCH_DIM_R/81            $8=       16?0                 9:'actions'         	;0
11 14  ECHO/40                   ?0        $8                   ?0                  	;0
12 15  ECHO/40                   ?0        10:'</th>
								</tr>
							</thead>
							<tbody>
								' ?0                  	;0
13 16  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'AB3a786b762A1806'	;0
14 16  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
15 16  FE_RESET_R/77             $10=      $9                   ?53                 	;0
16 16  FE_FETCH_R/78             ?0        $10                  16?1                	;53	>>53	<<52
17 17  NOP/0                     ?0        ?0                   ?0                  	;1
18 17  GOTO/253                  ?0        ?31                  ?13                 	;0
19 19  FETCH_DIM_R/81            $11=      16?1                 14:'notes'          	;0
20 19  ECHO/40                   ?0        $11                  ?0                  	;0
21 20  ECHO/40                   ?0        15:'</td>
									<td class="text-center">
										' ?0                  	;0
22 21  FETCH_DIM_R/81            $12=      16?1                 16:'enabled'        	;0
23 21  JMPZ/43                   ?0        $12                  ?26                 	;0	>>26
24 22  NOP/0                     ?0        ?0                   ?0                  	;1
25 22  GOTO/253                  ?0        ?46                  ?17                 	;0
26 24  ECHO/40                   ?0        18:'<i class="text-secondary fas fa-square"></i>' ?0                  	;0	<<23
27 25  NOP/0                     ?0        ?0                   ?0                  	;1
28 25  GOTO/253                  ?0        ?47                  ?19                 	;0
29 26  NOP/0                     ?0        ?0                   ?0                  	;1
30 26  GOTO/253                  ?0        ?46                  ?20                 	;0
31 28  ECHO/40                   ?0        21:'								<tr id="hmac-' ?0                  	;0
32 29  FETCH_DIM_R/81            $13=      16?1                 22:'id'             	;0
33 29  ECHO/40                   ?0        $13                  ?0                  	;0
34 30  ECHO/40                   ?0        23:'">
									<td class="text-center">' ?0                  	;0
35 31  FETCH_DIM_R/81            $14=      16?1                 24:'id'             	;0
36 31  ECHO/40                   ?0        $14                  ?0                  	;0
37 32  ECHO/40                   ?0        25:'</td>
									<td>' ?0                  	;0
38 33  NOP/0                     ?0        ?0                   ?0                  	;1
39 33  GOTO/253                  ?0        ?19                  ?26                 	;0
40 35  ECHO/40                   ?0        27:'"><button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Key" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-pencil-outline"></i></button></a>
											<button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Key" class="btn btn-light waves-effect waves-light btn-xs" onClick="api(' ?0                  	;0
41 36  FETCH_DIM_R/81            $15=      16?1                 28:'id'             	;0
42 36  ECHO/40                   ?0        $15                  ?0                  	;0
43 37  ECHO/40                   ?0        29:', \'delete\');""><i class="mdi mdi-close"></i></button>
										</div>
									</td>
								</tr>
								' ?0                  	;0
44 39  NOP/0                     ?0        ?0                   ?0                  	;1
45 39  GOTO/253                  ?0        ?52                  ?30                 	;0
46 42  ECHO/40                   ?0        31:'<i class="text-success fas fa-square"></i>' ?0                  	;0
47 44  ECHO/40                   ?0        32:'									</td>
									<td class="text-center">
										<div class="btn-group">
											<a href="./hmac?id=' ?0                  	;0
48 45  FETCH_DIM_R/81            $16=      16?1                 33:'id'             	;0
49 45  ECHO/40                   ?0        $16                  ?0                  	;0
50 46  NOP/0                     ?0        ?0                   ?0                  	;1
51 46  GOTO/253                  ?0        ?40                  ?34                 	;0
52 47  JMP/42                    ?0        ?16                  ?0                  	;0	>>16
53 47  FE_FREE/127               ?0        $10                  ?0                  	;0	<<15
54 50  ECHO/40                   ?0        35:'							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
' ?0                  	;0
55 51  GOTO/253                  ?0        ?93                  ?36                 	;0
56 53  ECHO/40                   ?0        37:'				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					HMAC Token has been authenticated and can now be used.
				</div>
				' ?0                  	;0
57 55  ECHO/40                   ?0        38:'				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
						<table id="datatable" class="table table-striped table-borderless dt-responsive nowrap">
							<thead>
								<tr>
									<th class="text-center">' ?0                  	;0
58 56  FETCH_DIM_R/81            $17=      16?0                 39:'id'             	;0
59 56  ECHO/40                   ?0        $17                  ?0                  	;0
60 57  ECHO/40                   ?0        40:'</th>
									<th>Description</th>
									<th class="text-center">Enabled</th>
									<th class="text-center">' ?0                  	;0
61 58  GOTO/253                  ?0        ?10                  ?41                 	;0
62 61  ECHO/40                   ?0        42:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
63 62  INCLUDE_OR_EVAL/73        ?14       43:'topbar.php'      ?0                  	;2
64 63  ECHO/40                   ?0        44:'					</div>
					<h4 class="page-title">HMAC Keys</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-12">
				' ?0                  	;0
65 64  ISSET_ISEMPTY_CV/197      #19=      16?2                 ?0                  	;33554432
66 64  JMPZ_EX/46                #19=      #19                  ?70                 	;0	>>70
67 64  FETCH_CONSTANT/99         #20=      ?0                   45:'STATUS_SUCCESS' 	;16
68 64  IS_EQUAL/17               #21=      16?2                 #20                 	;0
69 64  BOOL/52                   #19=      #21                  ?0                  	;0
70 64  BOOL_NOT/13               #22=      #19                  ?0                  	;0	<<66
71 64  JMPZ/43                   ?0        #22                  ?73                 	;0	>>73
72 65  GOTO/253                  ?0        ?57                  ?48                 	;0
73 67  GOTO/253                  ?0        ?56                  ?49                 	;0	<<71
74 69  ASSIGN/38                 ?19       16?3                 50:'HMAC Keys'      	;0
75 70  INCLUDE_OR_EVAL/73        ?20       51:'header.php'      ?0                  	;2
76 71  ECHO/40                   ?0        52:'<div class="wrapper boxed-layout"' ?0                  	;0
77 72  FETCH_IS/89               $25=      53:'_SERVER'         ?0                  	;0
78 72  ISSET_ISEMPTY_DIM_OBJ/115 #26=      $25                  54:'HTTP_X_REQUESTED_WITH'	;16777216
79 72  BOOL_NOT/13               #27=      #26                  ?0                  	;0
80 72  JMPZ_EX/46                #27=      #27                  ?88                 	;0	>>88
81 72  INIT_FCALL_BY_NAME/59     ?0        ?0                   55:'strtolower'     	;1
82 72  FETCH_FUNC_ARG/92         $28=      57:'_SERVER'         ?0                  	;1
83 72  FETCH_DIM_FUNC_ARG/93     $29=      $28                  58:'HTTP_X_REQUESTED_WITH'	;1
84 72  SEND_VAR_EX/66            ?80       $29                  ?1                  	;0
85 72  DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
86 72  IS_EQUAL/17               #31=      $30                  59:'xmlhttprequest' 	;0
87 72  BOOL/52                   #27=      #31                  ?0                  	;0
88 72  BOOL_NOT/13               #32=      #27                  ?0                  	;0	<<80
89 72  JMPZ/43                   ?0        #32                  ?91                 	;0	>>91
90 73  GOTO/253                  ?0        ?62                  ?60                 	;0
91 75  ECHO/40                   ?0        61:' style="display: none;"' ?0                  	;0	<<89
92 76  GOTO/253                  ?0        ?62                  ?62                 	;0
93 78  INCLUDE_OR_EVAL/73        ?29       63:'footer.php'      ?0                  	;2
94 79  NOP/0                     ?0        64:1                 ?0                  	;4294967295
*/

?>