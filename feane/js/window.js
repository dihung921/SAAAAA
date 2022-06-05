swal({
    title: "購物車為空",
    text: "您尚未選取餐點",
    icon: "warning",
    button:{
    text:"知道了",
    buttoncolor:"#4962B3",
    className: "swal-button",
    value: true,
    visible: true,} ,
  });
  $('#myAlert').on('closed.bs.alert', function () {
    ("Good job!", "You clicked the button!", "success")
  });