// doughnutChart of Inventory
let doughnutCtx_inventory = document.getElementById("doughnutChart-inventory");
let doughnutConfig_inventory = {
    type: 'doughnut',
    data: {
    labels: ["Red", "Blue", "Yellow", "Green", "Orange", "Purple"],
    datasets: [{
        data: [15, 10, 8, 7, 7, 3],
        label: 'label',
        backgroundColor: [  // それぞれの棒の色を設定(dataの数だけ)
        '#ff0000',
        '#0000ff',
        '#ffff00',
        '#008000',
        '#ee7800',
        '#884898',
        ],
        hoverOffset: 4,
    }]
    },
    options:{maintainAspectRatio:false}
};
let doughnutChart_inventory = new Chart(doughnutCtx_inventory, doughnutConfig_inventory);

// mixedChart of order/stock
let mixedCtx_orderstock = document.getElementById("mixedChart-orderstock");
let mixedConfig_orderstock = {
    type: 'bar',
    aspectRatio: 1,  // 横幅を縦幅の1倍にする
    data: {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sep", "Oct", "Nov", "Dec"],
    datasets: [{
        label: 'Bar Dataset',
        data: [2, 3, 5, 8, 10, 15, 18, 19, 15, 11, 7, 4],
        order:2,
        backgroundColor: [  // それぞれの棒の色を設定(dataの数だけ)
        '#ffa500',
        '#ffa500',
        '#ffa500',
        '#ffa500',
        '#ffa500',
        '#ffa500',
        '#ffa500',
        '#ffa500',
        '#ffa500',
        '#ffa500',
        '#ffa500',
        '#ffa500',
        ],
        borderWidth: 1,
    }, {
        label: 'Line Dataset',
        data: [4, 4, 6, 10, 13, 17, 20, 20, 18, 15, 10, 6],
        type: 'line',
        backgroundColor: '#071657',
        // this dataset is drawn on top
        order: 1
    }]
    },
};
let mixedChartChart_orderstock = new Chart(mixedCtx_orderstock, mixedConfig_orderstock);


// mixedChart of year-on-year
let mixedCtx_yearonyear = document.getElementById("mixedChart-yearonyear");
let mixedConfig_yearonyear = {
    type: 'bar',
    aspectRatio: 1,  // 横幅を縦幅の1倍にする
    data: {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sep", "Oct", "Nov", "Dec"],
    datasets: [{
        label: 'Bar Dataset',
        data: [4, 4, 6, 10, 13, 17, 19, 20, 18, 15, 10, 6],
        order:2,
        backgroundColor: [  // それぞれの棒の色を設定(dataの数だけ)
        '#ffa500',
        '#ffa500',
        '#ffa500',
        '#ffa500',
        '#ffa500',
        '#ffa500',
        '#ffa500',
        '#ffa500',
        '#ffa500',
        '#ffa500',
        '#ffa500',
        '#ffa500',
        ],
        borderWidth: 1,
    }, {
        label: 'Line Dataset',
        data: [2, 5, 6, 11, 14, 17, 17, 20, 15, 11, 9, 4],
        type: 'line',
        backgroundColor: '#071657',
        // this dataset is drawn on top
        order: 1
    }]
    },
};
let mixedChartChart_yearonyear = new Chart(mixedCtx_yearonyear, mixedConfig_yearonyear);

// Display the dropdown's selected menu
$(function(){
    $('.dropdown-menu .dropdown-item').click(function(){
        var visibleItem = $('.dropdown-toggle', $(this).closest('.dropdown'));
        visibleItem.text($(this).attr('value'));
    });
});

// Display the dropdown's selected menu
$(function(){
    $('.display button').click(function (e) {
        let display = $(e.target).attr('id');
        if (display === 'ranking-nav') {
            $('#mainCategory-select').addClass('d-none');
            $('#subCategory-select').addClass('d-none');
            $('#role-select').addClass('d-none');
            $('#ranking-selection').removeClass('d-none');
        } else
        {
            $('#mainCategory-select').removeClass('d-none');
            $('#subCategory-select').removeClass('d-none');
            $('#role-select').removeClass('d-none');
            $('#ranking-selection').addClass('d-none');
        }

    });
});