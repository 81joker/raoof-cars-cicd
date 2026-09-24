/* Booking form */
function BookingForm() {
  const [submitted, setSubmitted] = React.useState(false);
  const submit = (e) => {
    e.preventDefault();
    setSubmitted(true);
    setTimeout(() => setSubmitted(false), 3500);
  };
  const fieldStyle = {
    width: '100%',
    border: '1px solid #D9D2C4',
    background: 'white',
    padding: '14px 16px',
    fontFamily: "'Tajawal', sans-serif",
    fontSize: 15,
    color: '#1F1B16',
    borderRadius: 4,
    outline: 'none',
    transition: 'border-color 220ms, box-shadow 220ms',
  };
  const labelStyle = {
    display: 'block', fontFamily: "'Tajawal'", fontSize: 13,
    fontWeight: 600, color: '#1F1B16', marginBottom: 6,
  };
  return (
    <section style={{ background: '#F5F0E8', paddingBlock: 100 }}>
      <div style={{ maxWidth: 980, margin: '0 auto', padding: '0 40px', textAlign: 'center' }}>
        <SectionEyebrow>احجز رحلتك</SectionEyebrow>
        <SectionTitle>نموذج الحجز السريع</SectionTitle>
        <p style={{
          fontFamily: "'Tajawal'", fontSize: 17, lineHeight: 1.75,
          color: '#4A463E', margin: '20px auto 48px', maxWidth: 600,
        }}>
          اترك لنا تفاصيل رحلتك وسيتواصل معكم فريقنا خلال ساعات قليلة لتأكيد الحجز.
        </p>
        <form onSubmit={submit} style={{
          background: 'white',
          border: '1px solid #D9D2C4',
          padding: 40,
          textAlign: 'right',
          boxShadow: '0 8px 24px rgba(17,17,17,0.06)',
        }}>
          <div style={{ display: 'grid', gridTemplateColumns: '1fr 1fr', gap: 20, marginBottom: 20 }}>
            <div><label style={labelStyle}>مكان الاستلام</label><input style={fieldStyle} placeholder="فيينا - فندق إنتركونتيننتال" /></div>
            <div><label style={labelStyle}>الوجهة</label><input style={fieldStyle} placeholder="ميونخ" /></div>
            <div><label style={labelStyle}>تاريخ الانطلاق</label><input style={fieldStyle} type="date" defaultValue="2026-05-12" /></div>
            <div><label style={labelStyle}>نوع الخدمة</label>
              <select style={fieldStyle}>
                <option>مع سائق</option>
                <option>بدون سائق</option>
                <option>استقبال مطار</option>
                <option>باقة سياحية</option>
              </select>
            </div>
            <div><label style={labelStyle}>الاسم الكامل</label><input style={fieldStyle} placeholder="الاسم الكامل" /></div>
            <div><label style={labelStyle}>رقم الهاتف</label><input style={fieldStyle} placeholder="+966 5x xxx xxxx" dir="ltr" /></div>
          </div>
          <div style={{ marginBottom: 24 }}>
            <label style={labelStyle}>ملاحظات إضافية (اختياري)</label>
            <textarea style={{ ...fieldStyle, minHeight: 80, resize: 'vertical', fontFamily: "'Tajawal'" }} placeholder="عدد الركاب، الحقائب، توقيت محدد..." />
          </div>
          <div style={{ display: 'flex', justifyContent: 'flex-start', alignItems: 'center', gap: 16 }}>
            <Button variant="primary" type="submit" icon={<Icon name="calendar-check" size={18} />}>
              {submitted ? 'تم استلام طلبكم' : 'تأكيد الحجز'}
            </Button>
            <span style={{ fontFamily: "'Tajawal'", fontSize: 13, color: '#8A857B' }}>
              أو تواصل عبر واتساب: <strong style={{ color: '#1F1B16' }} dir="ltr">+43 660 843 3874</strong>
            </span>
          </div>
        </form>
      </div>
    </section>
  );
}
window.BookingForm = BookingForm;
